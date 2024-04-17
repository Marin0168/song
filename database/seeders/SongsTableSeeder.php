<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songs = [
            ['title' => 'Living on a prayer', 'singer' => 'Bon Jovi'],
            ['title' => 'Nothing else matters', 'singer' => 'Metallica'],
            ['title' => 'Thunderstruck', 'singer' => 'AC/DC'],
            ['title' => 'Back in black', 'singer' => 'AC/DC'],
            ['title' => 'Ace of spades', 'singer' => 'Motörhead'],
        ];
    }
}
