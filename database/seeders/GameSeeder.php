<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create(
            ['title'=>'Arkham Horror',
            'complexity_rating'=>3.58,
            'release_year'=>2005,
            'publisher_id'=>'FFG',
            'category_id'=>'FANT, SCIF',
            'playing_time_minutes'=>240,
            'min_number_players'=>1,
            'max_number_players'=>8],);
        Game::create(
            ['title'=>'Stone Age',
            'complexity_rating'=>2.47,
            'release_year'=>2008,
            'publisher'=>'ZMG',
            'category'=>'ECON',
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number+players'=>4],);
        Game::create(
            ['title'=>'Legends of Andor',
            'complexity_rating'=>2.76,
            'release_year'=>2012,
            'publisher'=>'KOS',
            'category'=>'FANT, ADVN',
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number+players'=>4],);
        Game::create(
            ['title'=>'Memoir `44',
            'complexity_rating'=>2.27,
            'release_year'=>2004,
            'publisher'=>'DOW',
            'category'=>'WARG',
            'playing_time_minutes'=>60,
            'min_number_players'=>2,
            'max_number+players'=>8],);
        Game::create(
            ['title'=>'Blood Rage',
            'complexity_rating'=>2.88,
            'release_year'=>2015,
            'publisher'=>'CMN',
            'category'=>'FIGH, MINI',
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number+players'=>4],);
        Game::create(
            ['title'=>'Castles of Burgundy',
            'complexity_rating'=>2.99,
            'release_year'=>2005,
            'publisher'=>'RVN',
            'category'=>'TERR, CIVI',
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number+players'=>4],);
        Game::create(
            ['title'=>'Power Grid',
            'complexity_rating'=>3.58,
            'release_year'=>2004,
            'publisher'=>'RGG',
            'category'=>'ECON, NEGO',
            'playing_time_minutes'=>120,
            'min_number_players'=>2,
            'max_number+players'=>6],);
    }
}
