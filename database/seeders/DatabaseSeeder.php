<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(BandsSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(AlbumSeeder::class);
    }
}
