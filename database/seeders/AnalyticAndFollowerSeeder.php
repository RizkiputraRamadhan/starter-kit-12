<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AnalyticAndFollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk followers (230 record)
        for ($i = 0; $i < 230; $i++) {
            DB::table('followers')->insert([
                'session' => Str::random(20),
                'status' => true,
                'created_at' => now()->subDays(rand(0, 365)),
                'updated_at' => now()->subDays(rand(0, 365)),
            ]);
        }

        // Seeder untuk analytic (dari Januari sampai bulan sekarang)
        $currentYear = now()->year;
        $currentMonth = now()->month;

        for ($month = 1; $month <= $currentMonth; $month++) {
            $entries = rand(50, 150);
            for ($i = 0; $i < $entries; $i++) {
                $date = Carbon::create($currentYear, $month, rand(1, 28))->setTime(rand(0, 23), rand(0, 59));

                DB::table('analytic')->insert([
                    'session' => Str::random(20),
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);
            }
        }
    }
}
