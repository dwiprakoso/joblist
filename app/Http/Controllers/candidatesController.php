<?php

namespace App\Http\Controllers;

use App\Models\candidate_contact;
use App\Models\candidates;
use App\Models\educational_history;
use App\Models\rooms;
use App\Models\traces_of_experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class candidatesController extends Controller
{
    public function index()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil profil kandidat dan data kontaknya
        $profile = $user->candidate;
        $contact = $profile->contact;
        $educations = $profile->educationalHistories()->orderBy('year_in', 'desc')->orderBy('year_out', 'desc')->get(); // Adjust this based on your relationship
        return view('candidates.index', compact('profile', 'contact', 'educations'));

    }
    public function showProfile()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil profil kandidat dan data kontaknya
        $profile = $user->candidate;
        $contact = $profile->contact;
        $educations = $profile->educationalHistories()->orderBy('year_in', 'desc')->orderBy('year_out', 'desc')->get(); // Adjust this based on your relationship
        // Ambil semua pengalaman dari database
        $experiences = traces_of_experience::where('candidate_id', auth()->user()->candidate->id)->get();

        // dd($profile);
        // dd($contact);

        return view('candidates.profile', compact('profile', 'contact', 'educations', 'experiences'));
    }

    // Method untuk upload foto profil
    public function updatePhoto(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'profile-image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $user = Auth::user();
        $profile = $user->candidate; // Asumsikan kandidat memiliki relasi profile
        // dd($profile);

        if ($request->hasFile('profile-image')) {
            // Hapus foto lama jika ada
            if ($profile->photo_path && Storage::exists('public/' . $profile->photo_path)) {
                Storage::delete('public/' . $profile->photo_path);
            }

            // Simpan foto baru
            $file = $request->file('profile-image');
            $path = $file->store('profile_images', 'public');

            // Update path foto di profil kandidat
            $profile->photo_path = $path;
            $profile->save();
        }

        return redirect()->route('dashboard.kandidat.showProfile')->with('success', 'Foto profil berhasil diperbarui.');
    }

    public function updateProfile(Request $request)
    {
        // Retrieve the candidate ID from the authenticated user
        $userId = auth()->user()->id;
        $candidate = candidates::where('user_id', $userId)->firstOrFail();
        $candidateId = $candidate->id;

        // Validate the request data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'headline' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'telephone' => 'nullable|string|max:20',
            'website' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:20',
        ]);

        // Find the candidate and contact records
        $contact = candidate_contact::where('candidate_id', $candidateId)->firstOrFail();

        // Update the candidate record
        $candidate->update([
            'full_name' => $validatedData['full_name'],
            'address' => $validatedData['address'],
            'headline' => $validatedData['headline'],
            'bio' => $validatedData['bio'],
        ]);

        // Update the contact record
        $contact->update([
            'telephone' => $validatedData['telephone'],
            'website' => $validatedData['website'],
            'instagram' => $validatedData['instagram'],
            'linkedin' => $validatedData['linkedin'],
            'whatsapp' => $validatedData['whatsapp'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    // Method to handle the form submission and add education history
    public function addEducation(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'institution_name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'year_in' => 'required|date_format:Y-m-d',
            'year_out' => 'nullable|date_format:Y-m-d', // year_out boleh null jika masih berlangsung
        ]);

        // Buat instansi baru dari model EducationalHistory dan simpan ke database
        $education = new educational_history();
        $education->candidate_id = auth()->user()->candidate->id; // Mengasumsikan candidate_id terkait dengan user yang sedang login
        $education->institution_name = $request->input('institution_name');
        $education->major = $request->input('major');
        $education->year_in = $request->input('year_in');

        // Periksa apakah pendidikan masih berlangsung
        if ($request->has('current_education')) {
            $education->year_out = null; // Set year_out ke null jika masih berlangsung
        } else {
            $education->year_out = $request->input('year_out');
        }

        $education->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat pendidikan berhasil ditambahkan.');
    }

    public function addExperience(Request $request)
    {
        // dd($request->all());

        // Buat instansi baru dari model TracesOfExperience dan simpan ke database
        $experience = new traces_of_experience();
        $experience->candidate_id = auth()->user()->candidate->id; // Mengasumsikan candidate_id terkait dengan user yang sedang login
        $experience->title = $request->input('title');
        $experience->description = $request->input('description');
        $experience->position = $request->input('position');
        $experience->year_in = $request->input('year_in');

        // Periksa apakah pengalaman masih berlangsung
        if ($request->has('current_experience')) {
            $experience->year_out = null; // Set year_out ke null jika masih berlangsung
        } else {
            $experience->year_out = $request->input('year_out');
        }

        // Proses pengunggahan file gambar jika ada
        if ($request->hasFile('photo_path')) {
            $file = $request->file('photo_path');
            $path = $file->store('images/experiences', 'public'); // Menyimpan di direktori storage/app/public/images/experiences
            $experience->photo_path = $path;
        }

        $experience->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat pengalaman berhasil ditambahkan.');
    }

    public function lowongan()
    {
        // Mengambil semua data rooms beserta data company terkait
        $rooms = rooms::with('company')->paginate(4);

        // Prepare benefits for all rooms
        $allBenefits = [];
        foreach ($rooms as $room) {
            $company = $room->company;
            $benefits = $company->benefits; // assuming benefits relation is defined in the Company model
            $allBenefits[$room->id] = $benefits;
        }
        
        return view('candidates.jobVacancy', compact('rooms', 'allBenefits'));
    }
    public function status()
    {
        return view('candidates.status');
    }
    public function statusDetail()
    {
        return view('candidates.statusDetail');
    }
}
