<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10000)->create()->each(function ($user) {
            $user->posts()->saveMany(\App\Models\Post::factory(5)->make()); // Create 5 posts per user
        });
    }
}




