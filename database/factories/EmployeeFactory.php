<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $department = Department::inRandomOrder()->first();
        $departmentCode = Str::limit(Str::upper($department->title), 3, '');
        return [
            'employee_id' => $departmentCode . '-' . str_pad(random_int(1, 9999), 4, '0', STR_PAD_LEFT),
            'address'=>$this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip' => $this->faker->zip,
            'country' => $this->faker->country,
            'phone' => $this->faker->phone,
            'education'=>$this->faker->education,

        ];
    }
}
