<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Album::create(['name' => 'Thriller', 'year' => 1982]);
        Album::create(['name' => 'The Dark Side of the Moon', 'year' => 1973]);
        Album::create(['name' => 'Abbey Road', 'year' => 1969]);
        Album::create(['name' => 'Back in Black', 'year' => 1980]);
        Album::create(['name' => 'Nevermind', 'year' => 1991]);
    }
}
