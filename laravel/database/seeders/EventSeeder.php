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
            'name'=>'Nyári Kralka',
            'date'=>'2025-06-21',
            'track_id'=>1,
            'img'=>'images\nyari-kralka.jpg'
        ]);
    }
}
