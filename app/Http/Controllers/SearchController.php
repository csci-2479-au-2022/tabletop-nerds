<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function displayResults() {
        return view('search-results');
    }
}
