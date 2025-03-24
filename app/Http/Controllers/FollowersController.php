<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FollowersController extends Controller
{
    public function save()
    {
        $sessionId = Session::getId();
    
        Follower::firstOrCreate(['session' => $sessionId], ['status' => true]);
    
        $totalFollowers = Follower::count();
    
        return response()->json([
            'success' => true,
            'message' => 'Session berhasil disimpan ke followers.',
            'session_id' => $sessionId,
            'total_followers' => $totalFollowers,
        ]);
    }
    
}
