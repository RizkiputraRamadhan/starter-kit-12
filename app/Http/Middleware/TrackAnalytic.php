<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Analytic;
use Illuminate\Support\Facades\Session;

class TrackAnalytic
{
    public function handle(Request $request, Closure $next)
    {
        $sessionId = Session::getId();

        $analytic = Analytic::where('session', $sessionId)->first();

        if ($analytic) {
            $analytic->touch();
        } else {
            Analytic::create([
                'session' => $sessionId,
            ]);
        }

        return $next($request);
    }
}
