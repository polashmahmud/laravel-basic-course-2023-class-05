<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'Polash Mahmud',
             'email' => 'polashmahmud@gmail.com',
         ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ]);

        Post::factory()->count(20)->create();
    }
}
