<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name'       => 'doctor',
                'guard_name' => 'web'
            ],
            [
                'name'       => 'patient',
                'guard_name' => 'web'
            ],
            [
                'name' => 'manager',
                'guard_name' => 'web'
            ],
            [
                'name' => 'supervisor',
                'guard_name' => 'web'
            ],
            [
                'name' => 'admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'superAdmin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'user',
                'guard_name' => 'web'
            ],
            [
                'name' => 'guest',
                'guard_name' => 'web'
            ],
        ]);
    }
}
