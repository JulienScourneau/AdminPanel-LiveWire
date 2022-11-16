<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'julien',
             'email' => 'julien@mail.com',
             'password' => 'password',
         ]);

         Post::factory(10)->create();

//         Category::factory(5)->create();
        \App\Models\Project::factory(5)->create();
    }
}
