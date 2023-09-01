<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $doctor = Doctor::inRandomOrder()->first();
        $patient = Patient::inRandomOrder()->first();
        return [
        'doctor_id' => $doctor->id,
        'patient_id' => $patient->id,
        'status' => $this->faker->randomElement(['ACTIVE', 'INACTIVE']),
        'date' => $this->faker->date('Y-m-d'),
        'time' => $this->faker->time('H:i:s'),
        ];
    }
}
