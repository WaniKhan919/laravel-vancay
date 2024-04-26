<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@laraveljobs-app.com',
            'password' => encrypt('superuser1234'),
            'role' => 1
        ]);
        \App\Models\User::factory()->create([
            'name' => 'student x',
            'email' => 'student-x@ulster.ac.uk',
            'password' => encrypt('password1234'),
            'role' => 0
        ]);
    }
}
