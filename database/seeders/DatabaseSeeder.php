<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        \App\Models\Post::factory(100)->create();

        \App\Models\Category::create([
            'topic' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        \App\Models\Category::create([
            'topic' => 'Travel',
            'slug' => 'travel'
        ]);

        \App\Models\Category::create([
            'topic' => 'Cooking',
            'slug' => 'cooking'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
