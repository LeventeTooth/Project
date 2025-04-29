<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'license_plate'=>'NRT-369',
            'model'=>'BMW E36',
            'price'=>900000,
            'power'=>'170le / 245nm',
            'img'=>'images\e36-compact-23i.jpg'
        ]);
    }
}
