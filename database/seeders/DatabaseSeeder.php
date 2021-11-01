<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();

        $user = User::factory()->create();
        $user2 = User::factory()->create();
        $user3 = User::factory()->create([
            'name' => 'Santosh Neupane'
        ]);

        Post::factory(5)->create([
            'user_id' => $user3->id
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::factory(1)->create([
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'category_id' => $family->id,
            'user_id' => $user->id
        ]);

        Post::factory(1)->create([
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'category_id' => $personal->id,
            'user_id' => $user->id
        ]);

        Post::factory(1)->create([
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'category_id' => $work->id,
            'user_id' => $user->id
        ]);

        Post::factory(1)->create([
            'title' => 'Best Family',
            'slug' => 'my-best-family',
            'category_id' => $family->id,
            'user_id' => $user2->id
        ]);

        Post::factory(1)->create([
            'title' => 'A day in the life of developer',
            'slug' => 'a-day-in-life-developer',
            'category_id' => $work->id,
            'user_id' => $user2->id
        ]);

        Post::factory(1)->create([
            'title' => 'How to sleep well',
            'slug' => 'sleep-well',
            'category_id' => $personal->id,
            'user_id' => $user2->id
        ]);
    }
}
