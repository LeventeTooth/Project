<?php

namespace Database\Seeders;

use App\Models\Track;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Track::create([
            'name'=>'Kralka drift',
            'location'=>'Kralka (Slovakia)',
            'price'=>6000,
            'img'=>'https://i.ytimg.com/vi/dAhwaqDi-nQ/maxresdefault.jpg'
        ]);
        Track::create([
            'name'=>'Mariapocs rally cross',
            'location'=>'Mariapocs (Hungary)',
            'price'=>12000,
            'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiKoRPD3YaVLeCsEx9TD-AgbJ2qcY5tA24wA&s'
        ]);
        Track::create([
            'name'=>'Black star speedway drift',
            'location'=>'Visonta (Hungary)',
            'price'=>20000,
            'img'=>'https://static.wixstatic.com/media/818277_0e1fa7f9926b423190880dd37072a161~mv2.png/v1/fill/w_272,h_243,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Screenshot%202024-10-21%20at%2014_00_24.png'
        ]);
    }
}
