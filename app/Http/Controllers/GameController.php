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
}
