<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Uner',
            'last_name' => 'YILMAZ',
            'email' => 'test@example.com',
        ]);

        // Job::factory(200)->create();
        $this->call(JobSeeder::class);
    }
}
