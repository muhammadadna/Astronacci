<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        User::create([
            'name'  => 'admin',
            'username'  => 'admin',
            'email' => 'admin@gmail.com',
            'password'  => bcrypt('password'),
            'is_admin'  => 1,
            'role'  => 'admin'
        ]);
        User::create([
            'name'  => 'user1',
            'username'  => 'user1',
            'email' => 'user1@gmail.com',
            'password'  => bcrypt('password'),
            'role'  => 'star'
        ]);
        User::create([
            'name'  => 'user2',
            'username'  => 'user2',
            'email' => 'user2@gmail.com',
            'password'  => bcrypt('password'),
            'role'  => 'premium'
        ]);
        User::create([
            'name'  => 'user3',
            'username'  => 'user3',
            'email' => 'user3@gmail.com',
            'password'  => bcrypt('password'),
            'role'  => 'regular'
        ]);

        // User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);

        Post::factory(15)->create();

    }
}
