<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Seeder;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $patients = [
            [
                'user_id'=>1,
                'name'=>'Samsur Rahman',
            ],
            [
                'user_id'=>2,
                'name'=>'Munni',
            ]
        ];

        foreach ($patients as $patient) {
            Patient::create($patient);
        }
    }
}
