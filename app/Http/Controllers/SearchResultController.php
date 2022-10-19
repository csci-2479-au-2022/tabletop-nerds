<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\GameService;

class SearchResultController implements GameService
{
    public function displayResults() {
        return view('search-results', [
            'title'=>$this->searchGamesByTitle()
        ]);
    }
}
