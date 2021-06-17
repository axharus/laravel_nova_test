<?php

namespace Database\Seeders;

use App\Models\Infrastructure;
use App\Models\Layout;
use App\Models\Post;
use App\Models\Realty;
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
        \App\Models\Flat::factory(100)->create();
        Infrastructure::factory(5)->create();
        Layout::factory(5)->create();
        Post::factory(50)->create();
        Realty::factory(100)->create();
    }
}
