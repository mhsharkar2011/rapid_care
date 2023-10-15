<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Dr. SM Samsur Rahman',
                'roles' => 'DOCTOR',
                'email' => 'samsu@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),//'password
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Dr. Munni',
                'roles' => 'DOCTOR',
                'email' => 'munni@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),//'password
                'remember_token' => Str::random(10),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
