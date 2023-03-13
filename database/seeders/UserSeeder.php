<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = Factory::create();

        $users = [
            [
                'name' => 'Mujahid Naqvi',
                'email' => 'mujahid@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Kumail Naqvi',
                'email' => 'kumail@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Raza Naqvi',
                'email' => 'raza@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        ];

        
        foreach ($users as $item) {
            $user = User::create($item);
        }
    }
}
