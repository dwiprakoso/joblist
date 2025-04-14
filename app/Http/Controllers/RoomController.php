<?php

namespace App\Http\Controllers;

use App\Models\path_challange;
use App\Models\path_meeting_invitation;
use App\Models\path_pemberkasan;
use App\Models\path_types;
use App\Models\paths;
use App\Models\rooms;
use App\Models\User;
use App\Services\FileServices;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{

    public function selectionRoom()
    {
        // Ambil user yang sedang login
        $user = auth()->user();

        // Ambil ID company dari user yang sedang login
        $company_id = $user->companyUser->company_id;

        // Ambil semua room yang terkait dengan company
        $rooms = rooms::where('company_id', $company_id)->get();

        // Return view dengan data rooms
        return view('recruiter.postRoom', compact('rooms'));
    }

    // Method untuk menyimpan data room baru
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $fileServices = new FileServices();

            // Simpan data room dasar
            $roomInput = $request->all();
            $room = rooms::create([
                'company_id' => auth()->user()->companyUser->company_id,
                'position_name' => $roomInput['position_name'],
                'departement' => $roomInput['departement'],
                'years_of_experience_criteria' => $roomInput['years_of_experience_criteria'],
                'total_open_position' => $roomInput['total_open_position'],
                'salary' => intval(str_replace('.', '', $roomInput['salary'])),
                'deadline' => $roomInput['deadline'],
                'work_system' => $roomInput['work_system'],
                'working_hours' => $roomInput['working_hours'],
                'access_rights' => $roomInput['access_rights'],
                'description' => $roomInput['description'],
                'requirements' => $roomInput['requirements'],
            ]);

            // Proses setiap tahapan seleksi dari input
            if ($request->has('step_type')) {
                foreach ($request->step_type as $index => $type) {
                    // Tentukan path_type_id berdasarkan jenis tahapan
                    $pathTypeId = $this->getPathTypeIdByStepType($type);
                    
                    // Buat path untuk tahapan ini
                    $path = paths::create([
                        'room_id' => $room->id,
                        'path_name' => $request->step_name[$index],
                        'path_type_id' => $pathTypeId,
                        'step_order' => $index + 1, // Tambahkan kolom ini jika ingin menyimpan urutan
                    ]);
                    
                    // Upload file jika ada
                    $lampiran = null;
                    if (isset($request->file('step_attachment')[$index])) {
                        $lampiran = $fileServices->uploadFile(
                            $request->file('step_attachment')[$index], 
                            strtolower($type)
                        );
                    }
                    
                    // Format rentang waktu
                    $rentangWaktu = $request->step_start_date[$index] . ' - ' . $request->step_end_date[$index];
                    
                    // Simpan detail sesuai jenis tahapan
                    switch ($type) {
                        case 'Upload Berkas':
                            path_pemberkasan::create([
                                'path_id' => $path->id,
                                'deskripsi' => $request->step_description[$index] ?? '',
                                'rentang_waktu' => $rentangWaktu,
                                'lampiran' => $lampiran
                            ]);
                            break;
                            
                        case 'Meeting':
                            path_meeting_invitation::create([
                                'path_id' => $path->id,
                                'deskripsi' => $request->step_description[$index] ?? '',
                                'lokasi_link_meet' => $request->step_location[$index] ?? '',
                                'rentang_waktu' => $rentangWaktu,
                                'lampiran' => $lampiran
                            ]);
                            break;
                            
                        case 'Challenge':
                            path_challange::create([
                                'path_id' => $path->id,
                                'deskripsi' => $request->step_description[$index] ?? '',
                                'link_lampiran_challange' => $request->step_location[$index] ?? '',
                                'rentang_waktu' => $rentangWaktu,
                                'lampiran' => $lampiran
                            ]);
                            break;
                            
                        default:
                            // Untuk jenis tahapan baru, dapat diperluaskan dengan membuat model baru
                            // atau menggunakan pendekatan yang lebih generik dengan path_details
                            
                            // Contoh pendekatan generik untuk tipe tahapan custom:
                            $customFields = [
                                'deskripsi' => $request->step_description[$index] ?? '',
                                'lokasi' => $request->step_location[$index] ?? '',
                                'rentang_waktu' => $rentangWaktu,
                                'lampiran' => $lampiran
                            ];
                            
                            foreach ($customFields as $key => $value) {
                                if (!empty($value)) {
                                    \App\Models\path_details::create([
                                        'path_id' => $path->id,
                                        'field_key' => $key,
                                        'field_type' => $key == 'lampiran' ? 'file' : 'text',
                                        'value' => $value
                                    ]);
                                }
                            }
                            break;
                    }
                }
            }

            DB::commit();
            return redirect()->back()->with('success', 'Data lowongan berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Menentukan path_type_id berdasarkan jenis tahapan
     */
    private function getPathTypeIdByStepType($stepType)
    {
        $pathTypes = [
            'Upload Berkas' => 1,
            'Meeting' => 2,
            'Challenge' => 3,
            // Tambahkan pemetaan untuk jenis tahapan baru
        ];
        
        // Jika jenis tahapan tidak dikenali, gunakan tipe generic
        return $pathTypes[$stepType] ?? 4; // Asumsi 4 adalah ID untuk tipe generic
    }


    // public function selectionRoomDetail($id)
    // {
    //     $room = rooms::findOrFail($id);

    //     $allcandidates
    //         = $room->candidates()->paginate(10);
    //     // dd($room->id);
    //     $berkasPath = paths::where('room_id', $room->id)->where('path_type_id', 1)->first();
    //     $meetPath = paths::where('room_id', $room->id)->where('path_type_id', 2)->first();
    //     $challangePath = paths::where('room_id', $room->id)->where('path_type_id', 3)->first();
    //     // dd(paths::all());
    //     // foreach ($berkasPath->pathPemberkasan->submissionPemberkasan as $submission) {
    //     //     dd($submission->candidate->full_name);
    //     // }

    //     // foreach ($meetPath->pathMeetingInvitation->submissionMeetingInvitation as $submission) {
    //     //     dd($submission->candidate->full_name);
    //     // }

    //     // foreach ($challangePath->pathChallange->submissionChallange as $submission) {
    //     //     dd($submission->candidate->full_name);
    //     // }
    //     $berkasCandidates = $berkasPath->pathPemberkasan->submissionPemberkasan;
    //     $meetCandidates = $meetPath->pathMeetingInvitation->submissionMeetingInvitation;
    //     $challangeCandidates = $challangePath->pathChallange->submissionChallange;
    //     $approvedCandidates = $room->candidates()->wherePivot('status', 'approved')->paginate(10);
    //     return view('recruiter.postRoomDetail', compact('room', 'allcandidates', 'berkasPath', 'meetPath', 'challangePath', 'berkasCandidates', 'meetCandidates', 'challangeCandidates', 'approvedCandidates'));
    // }
    public function selectionRoomDetail($id)
    {
        $room = rooms::findOrFail($id);
        $allcandidates = $room->candidates()->paginate(5);
        
        // Ambil semua tahapan untuk room ini dalam urutan yang benar
        $paths = paths::where('room_id', $room->id)
            ->orderBy('step_order', 'asc')
            ->get();
        
        // Siapkan array untuk menyimpan data yang akan ditampilkan
        $pathData = [];
        
        foreach ($paths as $path) {
            $pathInfo = [
                'path' => $path,
                'candidates' => null
            ];
            
            // Tangani berdasarkan tipe path
            switch ($path->path_type_id) {
                case 1: // Upload Berkas
                    if ($path->pathPemberkasan) {
                        $pathInfo['detail'] = $path->pathPemberkasan;
                        $pathInfo['candidates'] = $this->paginate($path->pathPemberkasan->submissionPemberkasan, 5);
                    }
                    break;
                    
                case 2: // Meeting
                    if ($path->pathMeetingInvitation) {
                        $pathInfo['detail'] = $path->pathMeetingInvitation;
                        $pathInfo['candidates'] = $this->paginate($path->pathMeetingInvitation->submissionMeetingInvitation, 5);
                    }
                    break;
                    
                case 3: // Challenge
                    if ($path->pathChallange) {
                        $pathInfo['detail'] = $path->pathChallange;
                        $pathInfo['candidates'] = $this->paginate($path->pathChallange->submissionChallange, 5);
                    }
                    break;
                    
                default:
                    // Tangani tipe path custom jika ada
                    $pathInfo['detail'] = $path->pathDetails;
                    // Logika untuk kandidat custom harus ditambahkan
                    break;
            }
            
            $pathData[] = $pathInfo;
        }
        
        $approvedCandidates = $room->candidates()->wherePivot('status', 'approved')->paginate(5);
    
        return view('recruiter.postRoomDetail', compact('room', 'allcandidates', 'pathData', 'approvedCandidates'));
    }

    /**
     * Paginate a given collection.
     *
     * @param \Illuminate\Support\Collection $items
     * @param int $perPage
     * @param int|null $page
     * @param array $options
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    protected function paginate(Collection $items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (LengthAwarePaginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
