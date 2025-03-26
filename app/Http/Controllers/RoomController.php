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

            // dd($request->all());

            $roomInput = $request->all();

            $room =  rooms::create([
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


            $uploadBerkas = paths::create([
                'room_id' => $room->id,
                'path_name' => $request->berkas_path_name,
                'path_type_id' => 1,
            ]);

            $meetInvitation = paths::create([
                'room_id' => $room->id,
                'path_name' => $request->meet_path_name,
                'path_type_id' => 2,
            ]);

            $challangePath = paths::create([
                'room_id' => $room->id,
                'path_name' =>
                $request->challange_path_name,
                'path_type_id' => 3,
            ]);

            $fileBerkas = $fileServices->uploadFile($request->file('berkas_lampiran'), 'berkas');
            $meetBerkas = $fileServices->uploadFile($request->file('meet_lampiran'), 'meet');
            $challangeBerkas = $fileServices->uploadFile($request->file('challange_lampiran'), 'challange');

            $berkas_rentang_waktu = $request->berkas_start . ' - ' . $request->berkas_end;
            $meet_rentang_waktu = $request->meet_start . ' - ' . $request->meet_end;
            $challange_rentang_waktu = $request->challange_start . ' - ' . $request->challange_end;


            path_pemberkasan::create([
                'path_id' => $uploadBerkas->id,
                'deskripsi' => $request->berkas_deskripsi,
                'rentang_waktu' => $berkas_rentang_waktu,
                'lampiran' => $fileBerkas
            ]);

            path_meeting_invitation::create([
                'path_id' => $meetInvitation->id,
                'deskripsi' => $request->meet_deskripsi,
                'lokasi_link_meet' =>  $request->meet_lokasi_link_meet,
                'rentang_waktu' => $meet_rentang_waktu,
                'lampiran' => $meetBerkas
            ]);

            path_challange::create([
                'path_id' => $challangePath->id,
                'deskripsi' => $request->challange_deskripsi,
                'link_lampiran_challange' => $request->challange_link_lampiran_challange,
                'rentang_waktu' => $challange_rentang_waktu,
                'lampiran' => $challangeBerkas,
            ]);

            DB::commit();
            return redirect()->back()->with('success', 'Data lowongan berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            // something went wrong
        }
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
        $berkasPath = paths::where('room_id', $room->id)->where('path_type_id', 1)->first();
        $meetPath = paths::where('room_id', $room->id)->where('path_type_id', 2)->first();
        $challangePath = paths::where('room_id', $room->id)->where('path_type_id', 3)->first();

        $berkasCandidates = $this->paginate($berkasPath->pathPemberkasan->submissionPemberkasan, 5);
        $meetCandidates = $this->paginate($meetPath->pathMeetingInvitation->submissionMeetingInvitation, 5);
        $challangeCandidates = $this->paginate($challangePath->pathChallange->submissionChallange, 5);
        $approvedCandidates = $room->candidates()->wherePivot('status', 'approved')->paginate(5);

        return view('recruiter.postRoomDetail', compact('room', 'allcandidates', 'berkasPath', 'meetPath', 'challangePath', 'berkasCandidates', 'meetCandidates', 'challangeCandidates', 'approvedCandidates'));
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
