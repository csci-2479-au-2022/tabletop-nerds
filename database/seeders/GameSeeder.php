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
            'max_number_players'=>8,
            'image_url'=>'https://cf.geekdo-images.com/9cJf4kd_HZQo6NunfJlo9w__itemrep/img/d7sT40CRGgKcClC_UjTlanbRrUU=/fit-in/246x300/filters:strip_icc()/pic175966.jpg'
        ]);

        $zManGames = Publisher::where('publisher_code', 'ZMG')->first();
        $zManGames->games()->create([
            'title'=>'Stone Age',
            'complexity_rating'=>2.47,
            'release_year'=>2008,
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number_players'=>4,
            'image_url'=>'https://cf.geekdo-images.com/elmZegVZ6gp4_5izUgxGQQ__itemrep/img/vApiI-gvXtwafEriPc4jDVJ1ajA=/fit-in/246x300/filters:strip_icc()/pic1632539.jpg'
        ]);

        $kosmos = Publisher::where('publisher_code', 'KOS')->first();
        $kosmos->games()->create([
            'title'=>'Legends of Andor',
            'complexity_rating'=>2.76,
            'release_year'=>2012,
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number_players'=>4,
            'image_url'=>'https://cf.geekdo-images.com/IO8_BYKeofnWy8DIjo2RRg__itemrep/img/4YnI2L514pell4tElfMlDDsgsYc=/fit-in/246x300/filters:strip_icc()/pic2606106.jpg'
        ]);

        $daysOfWonder = Publisher::where('publisher_code', 'DOW')->first();
        $daysOfWonder->games()->create([
            'title'=>'Memoir `44',
            'complexity_rating'=>2.27,
            'release_year'=>2004,
            'playing_time_minutes'=>60,
            'min_number_players'=>2,
            'max_number_players'=>8,
            'image_url'=>'https://cf.geekdo-images.com/2AjxTtgBtZVst8wOAk1NAA__itemrep/img/1LYFMIYYAtFrWN-QggsaLXwHS0g=/fit-in/246x300/filters:strip_icc()/pic6974498.jpg'
        ]);

        $coolMiniNot = Publisher::where('publisher_code', 'CMN')->first();
        $coolMiniNot->games()->create([
            'title'=>'Blood Rage',
            'complexity_rating'=>2.88,
            'release_year'=>2015,
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number_players'=>4,
            'image_url'=>'https://cf.geekdo-images.com/HkZSJfQnZ3EpS214xtuplg__itemrep/img/ZSJhCapvtPoiIQZ1XdfO-qgUuFY=/fit-in/246x300/filters:strip_icc()/pic2439223.jpg'
        ]);

        $ravensberger = Publisher::where('publisher_code', 'RVN')->first();
        $ravensberger->games()->create([
            'title'=>'Castles of Burgundy',
            'complexity_rating'=>2.99,
            'release_year'=>2011,
            'playing_time_minutes'=>90,
            'min_number_players'=>2,
            'max_number_players'=>4,
            'image_url'=>'https://cf.geekdo-images.com/5CFwjd8zTcGYVUnkXh04hw__itemrep/img/GLJxEMRq5M4T9BZGcZ6xtDzj5OQ=/fit-in/246x300/filters:strip_icc()/pic1176894.jpg'
        ]);

        $rioGrande = Publisher::where('publisher_code', 'RGG')->first();
        $rioGrande->games()->create([
            'title'=>'Power Grid',
            'complexity_rating'=>3.58,
            'release_year'=>2004,
            'playing_time_minutes'=>120,
            'min_number_players'=>2,
            'max_number_players'=>6,
            'image_url'=>'https://cf.geekdo-images.com/yd6LuatytHRhcFCxCf-EEg__itemrep/img/LsqKzcnoaVUlSUmLxFE8dwxFndk=/fit-in/246x300/filters:strip_icc()/pic4459753.jpg'
        ]);
    }
}
