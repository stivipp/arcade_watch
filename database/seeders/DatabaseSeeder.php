<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\FuncCall;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(1)->create();
       // $this->call(UsersTableSeeder::class);
       // $this->call(PostsTableSeeder::class);

       \App\Models\User::factory(5)->create()->each(function ($user) {
           for ($i = 0; $i < 5; $i++) {
               $user->posts()->save(\App\Models\Post::factory()->make());
               $user->comments()->save(\App\Models\Comment::factory()->make());
           }
       });

    }
}
