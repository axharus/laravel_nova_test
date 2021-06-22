<?php

namespace Database\Seeders;

use App\Models\Complex;
use App\Models\Flat;
use App\Models\Infrastructure;
use App\Models\Layout;
use App\Models\Post;
use App\Models\User;
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
        Complex::factory(5)->create();
        Flat::factory(200)->create();
        Infrastructure::factory(5)->create();
        Layout::factory(5)->create();
        Post::factory(50)->create();
        User::factory(10)->create();

    }
}
