<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Program;
use App\Models\User;
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

        // User::factory(10)->create([
        //     'name' => '',
        //     'email' => '',
        // ]);
        Client::factory(10)->create([
            'name' => '',
            'email' => '',
            'phone' => '',
        ]);
        Program::factory(10)->create([
            'name' => '',
            'description' => '',
        ]);
    }
}
