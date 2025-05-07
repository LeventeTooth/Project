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
            'model'=>'BMW E36 Compact 323i',
            'price'=>70000,
            'power'=>'170le / 245nm',
            'img'=>'https://live.staticflickr.com/8250/8496602327_90c82cd202_b.jpg'
        ]);
        Car::create([
            'license_plate'=>'ABC-123',
            'model'=>'BMW E46 Coupe 330i',
            'price'=>80000,
            'power'=>'228le / 300nm',
            'img'=>'https://preview.redd.it/vvdtfobbl1y61.jpg?width=1080&crop=smart&auto=webp&s=d3e7fb14979ca54132d442ecd8997437f3e17767'
        ]);
        Car::create([
            'license_plate'=>'Épített',
            'model'=>'Nissan GT-R Nismo',
            'price'=>100000,
            'power'=>'550le / 800nm',
            'img'=>'https://www.topgear.com/sites/default/files/news-listicle/image/1_80.jpg'
        ]);
        Car::create([
            'license_plate'=>'A235 RWW',
            'model'=>'Pegout 205 GTI',
            'price'=>40000,
            'power'=>'130le / 161nm',
            'img'=>'https://i2-prod.dailyrecord.co.uk/incoming/article32224429.ece/ALTERNATES/s1200/1_JS326075346.jpg'
        ]);
    }
}
