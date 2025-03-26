<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\RoomCandidate;
use App\Models\rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomCandidateController extends Controller
{
    public function apply($id)
    {
        $room = rooms::findOrFail($id);
        $candidate = Auth::user()->candidate;
        // Check if the RoomCandidate already exists
        $existingCandidate = RoomCandidate::where('candidates_id', $candidate->id)
            ->where('rooms_id', $room->id)
            ->first();

        // If it doesn't exist, create a new one
        if (!$existingCandidate) {
            RoomCandidate::create([
                'candidates_id' => $candidate->id,
                'rooms_id' => $room->id,
            ]);

            return redirect()->back()->with('success', 'Sukses Apply Lowongan');
        }

        // If it exists, return a message indicating so
        return redirect()->back()->with('error', 'Anda sudah mengapply untuk lowongan ini sebelumnya.');
    }
}
