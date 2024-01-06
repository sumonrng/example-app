<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sponsor_id'=>fake()->name(),
            'username'=>fake()->name(5),
            'email'=>fake()->email(),
            'name'=>fake()->name(),
            'country'=>fake()->country(),
            'city'=>fake()->city()
        ];
    }
}
