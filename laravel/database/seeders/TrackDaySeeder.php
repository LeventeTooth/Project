<?php

namespace Database\Seeders;

use App\Models\TrackDay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrackDay::create([
            'name'=> 'Nyári Kralka',
            'date' => '2025-06-21',
            'track_id'=> 1,
        ]);
    }
}
