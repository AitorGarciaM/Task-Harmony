<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Uncomit to create Test user.
        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/


        DB::table('task_status')->insert([
            'status' => 'To Do'
        ]);

        DB::table('task_status')->insert([
            'status' => 'In Progress'
        ]);

        DB::table('task_status')->insert([
            'status' => 'Completed'
        ]);

        DB::table('task')->insert([
            'name' => 'test',
            'description' => 'this is a test task to make sure that controller works.',
            'task_status_id' => 1
        ]);
    }
}
