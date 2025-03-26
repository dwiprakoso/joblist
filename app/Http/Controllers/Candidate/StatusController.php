<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\paths;
use App\Models\submission_challange;
use App\Models\submission_meeting_invitation;
use App\Models\submission_pemberkasan;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $candidate = auth()->user()->candidate;
        $rooms = $candidate->rooms()->get();


        return view('candidates.status', compact('rooms'));
    }

    public function detail($id)
    {
        $room = auth()->user()->candidate->rooms()->where('rooms.id', $id)->first();

        if (!$room) {
            return redirect()->route('candidate.status')->with('error', 'Anda tidak memiliki akses ke halaman ini');
        }
        $berkasPath = paths::where('room_id', $room->id)->where('path_type_id', 1)->first();
        $meetPath = paths::where('room_id', $room->id)->where('path_type_id', 2)->first();
        $challangePath = paths::where('room_id', $room->id)->where('path_type_id', 3)->first();

        $submission_pemberkasan = submission_pemberkasan::where('candidate_id', auth()->user()->candidate->id)->where('path_pemberkasan_id', $berkasPath->pathPemberkasan->id)->first();

        $submission_meeting = submission_meeting_invitation::where('candidate_id', auth()->user()->candidate->id)->where('path_meeting_invitation_id', $meetPath->pathMeetingInvitation->id)->first();

        $submission_challange = submission_challange::where('candidate_id', auth()->user()->candidate->id)->where('path_challange_id', $challangePath->pathChallange->id)->first();

        // dd($submission_challange);
        return view('candidates.statusDetail', compact('room', 'berkasPath', 'meetPath', 'challangePath', 'submission_pemberkasan', 'submission_meeting', 'submission_challange'));
    }
}
