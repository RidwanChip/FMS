<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Pastikan UserFactory ada
            'department_id' => Department::inRandomOrder()->first()->id ?? Department::factory(),
            'contact' => $this->faker->phoneNumber,
        ];
    }
}
