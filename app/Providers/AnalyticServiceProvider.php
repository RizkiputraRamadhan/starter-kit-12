<?php

namespace App\Providers;

use App\Models\Analytic;
use App\Models\Follower;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AnalyticServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $growth = [];

            for ($i = 1; $i <= 12; $i++) {
                $monthName = now()->setMonth($i)->format('F');
                $count = Analytic::whereYear('updated_at', now()->year)->whereMonth('updated_at', $i)->count();

                $growth[] = [
                    'month' => $monthName,
                    'count' => $count,
                ];
            }

            $view->with([
                'growth' => $growth,
            ]);
        });
    }
}
