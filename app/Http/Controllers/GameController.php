<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function gameList(){
        return view('game-list', [
            'games'=>$this->getGames(),
            'greeting'=>'Hello World'
        ]);
    }

    private function getGames(){
        return [
            ['title'=>'Monopoly'],
            ['title'=>'Risk'],
            ['title'=>'D&D'],
        ];
    }
    
    public function gameInfo(){
        return view('info-list', [
             'info'=>$this->getInfo()
        ]);
    }

    private function getInfo(){
        return [
            ['description'=>'Real estate boardgame for 2-8 player, 5/10, 8+'],
            ['description'=>'Army building boardgame for 2-6 players, 6/10, 10+'],
            ['description'=>'Open role-playing game for 3+ players, 9/10, 12+'],
        ];
    }
}
