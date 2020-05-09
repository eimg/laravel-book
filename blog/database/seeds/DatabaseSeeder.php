<?php

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
        factory(App\Article::class, 20)->create();
        factory(App\Category::class, 5)->create();
        factory(App\Comment::class, 40)->create();

        factory(App\User::class)->create([
            "name" => "Alice",
            "email" => "alice@gmail.com",
        ]);

        factory(App\User::class)->create([
            "name" => "Bob",
            "email" => "bob@gmail.com",
        ]);
    }
}
