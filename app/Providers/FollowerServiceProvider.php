<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use App\Models\Follower;

class FollowerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('*', function ($view) {
            $sessionId = Session::getId();
            $followersCount = Follower::count();
            $isFollowing = Follower::where('session', $sessionId)->exists();

            $view->with([
                'followersCount' => $followersCount,
                'isFollowing' => $isFollowing
            ]);
        });
    }
}
