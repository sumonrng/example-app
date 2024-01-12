<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Citie;
use Illuminate\Database\Seeder;
// use App\Models\Student;
use App\Models\Member;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Student::factory(10)->create();
        // Student::factory()->count(5)->create();
        // Student::factory(10)->create();
        // Member::factory(10)->create();
        Citie::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
