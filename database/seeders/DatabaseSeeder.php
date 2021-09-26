<?php

namespace Database\Seeders;

use App\Models\Series;
use App\Models\Video;
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
        // \App\Models\User::factory(10)->create();

        Series::factory(10)->create()->each(function($series){
            $series->videos()->saveMany(Video::factory(10)->make());
        });
    }
}
