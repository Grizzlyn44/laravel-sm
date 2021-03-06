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
        // $this->call(UsersTableSeeder::class);

        // factory(App\User::class, 2)->create();
        // factory(App\Post::class, 5)->create();
        factory(App\Tag::class, 10)->create();
    }
}
