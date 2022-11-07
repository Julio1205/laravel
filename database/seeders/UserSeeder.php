<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Julio Alejandro Lopez Espinoza',
            'email' => 'Raptor.67.jL@gmail.com',
            'email_verified_at' => now(),
            'password' => 'JulioRS02', // password
            'remember_token' => Str::random(10),
        ])->assignRole('admin');

        User::create([

            'name' => 'Efren Barcenas',
            'email' => 'Efren@raton.com',
            'email_verified_at' => now(),
            'password' => 'raton123', // password
            'remember_token' => Str::random(10),
        ])->assignRole('editor');

        User::create([

            'name' => 'Manis',
            'email' => 'Manis1@admin.com',
            'email_verified_at' => now(),
            'password' => 'ManisyGrenas', // password
            'remember_token' => Str::random(10),
        ])->assignRole('usuario');
    }
}
