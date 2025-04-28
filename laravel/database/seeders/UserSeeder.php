<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'admin1234',
            'address'=>'Szentender Kalvaria ut 8',
            'birth_date'=>'2000.04.26',
            'age'=>19,
            'group_id'=>1
        ]);
    }
}
