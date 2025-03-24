<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Follower;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;

class Followers extends Component
{
    use WithPagination;

    public function save()
    {

        $sessionId = Session::getId();

       Follower::firstOrCreate(
            ['session' => $sessionId],
            ['status' => true]
        );

        return response()->json([
            'message' => 'Session berhasil disimpan ke followers.',
            'session_id' => $sessionId
        ]);

        $this->resetForm();
        session()->flash('message', 'Project berhasil disimpan.');
    }


    public function checkFollower()
    {
        $sessionId = Session::getId();

        $exists = Follower::where('session', $sessionId)->exists();

        return response()->json([
            'is_following' => $exists
        ]);
    }
}