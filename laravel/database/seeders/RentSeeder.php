<?php

namespace Database\Seeders;

use App\Models\Rent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rent_times_all = ['10:00','10:30','11:00','11:30','12:00','14:00','14:30','15:00','15:30','16:00'];
        $rent_times_9 = ['10:00','10:30','11:00','11:30','12:00','14:00','14:30','15:00','15:30'];

        foreach($rent_times_9 as $time){
            Rent::create([
                'user_id'=>1,
                'car_id'=>1,
                'rent_time'=>$time,
                'event_id'=>1
            ]);
        }

        foreach($rent_times_all as $time){
            Rent::create([
                'user_id'=>1,
                'car_id'=>3,
                'rent_time'=>$time,
                'event_id'=>3
            ]);
        }
        
    }
}
