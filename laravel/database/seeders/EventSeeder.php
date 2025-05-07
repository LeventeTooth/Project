<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name'=>'Kralka Summer Festival',
            'date'=>'2025-06-21',
            'track_id'=>1,
            'img'=>'images\nyari-kralka.jpg'
        ]);

        Event::create([
            'name'=>'Visonta Drift Festival',
            'date'=>'2025-07-12',
            'track_id'=>3,
            'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMWVG7Hvm46DlQuMakjON3EEHtTmOlLJLrkiL5TjaDcmcxvTpSAi2rGZbfxxxwwVSXb84&usqp=CAU'
        ]);

        Event::create([
            'name'=>'Driftmasters 5. forduló',
            'date'=>'2025-08-18',
            'track_id'=>2,
            'img'=>'https://drifting.hu/wp-content/uploads/dm_2024_julius-scaled.jpg'
        ]);
    }
}
