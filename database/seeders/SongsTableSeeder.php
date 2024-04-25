<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Voeg gegevens toe aan de songs tabel
        Song::create(['title' => 'Living on a prayer', 'singer' => 'Bon Jovi']);
        Song::create(['title' => 'Nothing else matters', 'singer' => 'Metallica']);
        Song::create(['title' => 'Thunderstruck', 'singer' => 'AC/DC']);
        Song::create(['title' => 'Back in black', 'singer' => 'AC/DC']);
        Song::create(['title' => 'Ace of spades', 'singer' => 'Motörhead']);
    }
}
