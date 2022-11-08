<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Publisher;
use App\Models\Category;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fantasyFlight = Publisher::where('publisher_code', 'FFG')->first();
        $fantasyFlight->games()->create([
            'title'=>'Arkham Horror',
            'complexity_rating'=>3.58,
            'release_year'=>2005,
            'playing_time_minutes'=>240,
            'min_number_players'=>1,
            'max_number_players'=>8
        ]);

        $zManGames = Publisher::where('publisher_code', 'ZMG')->first();
        $zManGames->games()->create([
            'title'=>'Stone Age',
            'complexity_rating'=>2.47,
            'release_year'=>2008,
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number_players'=>4
        ]);

        $kosmos = Publisher::where('publisher_code', 'KOS')->first();
        $kosmos->games()->create([
            'title'=>'Legends of Andor',
            'complexity_rating'=>2.76,
            'release_year'=>2012,
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number_players'=>4
        ]);

        $daysOfWonder = Publisher::where('publisher_code', 'DOW')->first();
        $daysOfWonder->games()->create([
            'title'=>'Memoir `44',
            'complexity_rating'=>2.27,
            'release_year'=>2004,
            'playing_time_minutes'=>60,
            'min_number_players'=>2,
            'max_number_players'=>8
        ]);

        $coolMiniNot = Publisher::where('publisher_code', 'CMN')->first();
        $coolMiniNot->games()->create([
            'title'=>'Blood Rage',
            'complexity_rating'=>2.88,
            'release_year'=>2015,
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number_players'=>4
        ]);

        $ravensberger = Publisher::where('publisher_code', 'RVN')->first();
        $ravensberger->games()->create([
            'title'=>'Castles of Burgundy',
            'complexity_rating'=>2.99,
            'release_year'=>2005,
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number_players'=>4
        ]);

        $rioGrande = Publisher::where('publisher_code', 'RGG')->first();
        $rioGrande->games()->create([
            'title'=>'Power Grid',
            'complexity_rating'=>3.58,
            'release_year'=>2004,
            'playing_time_minutes'=>120,
            'min_number_players'=>2,
            'max_number_players'=>6
        ]);
    }
}
