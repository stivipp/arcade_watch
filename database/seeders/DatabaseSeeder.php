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

       factory(App\User::class, 5)->create()->each(function ($user) {
           for ($i = 0; $i < 5; $i++) {
               $user->posts()->save(factory(App\Post::class)->make());
               $user->comments()->save(factory(App\Comment::class)->make());
           }
       });

    }
}
