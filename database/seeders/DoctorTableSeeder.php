<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $doctors = [
                [
                    'user_id'=>1,
                    'name' => 'Dr. SM Samsur Rahman',
                    'specialization' => 'Sr. X',
                    'phone' => '01733172007',
                    'dob'=>'1988-03-02',
                    'gender' => 'Male',
                ],
                [
                    'user_id'=>2,
                    'name' => 'Dr. Munni',
                    'specialization' => 'Sr. Y',
                    'phone' => '01733172006',
                    'dob'=>'1994-03-02',
                    'gender' => 'Female',
                ],
            ];

            foreach ($doctors as $doctor) {
                Doctor::insert($doctor);
            }
        });
    }
}
