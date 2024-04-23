<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Band;

class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Band::create(['name' => 'Led Zeppelin', 'genre' => 'Rock', 'founded' => 1968]);
        Band::create(['name' => 'Radiohead', 'genre' => 'Alternative Rock', 'founded' => 1985]);
        Band::create(['name' => 'The Beatles', 'genre' => 'Rock', 'founded' => 1960, 'active_till' => '1970']);
    }
}
