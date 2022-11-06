<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Card Game', 'category_code' => 'CARD']);
        Category::create(['name' => 'Economic', 'category_code' => 'ECON']);
        Category::create(['name' => 'Negotiation', 'category_code' => 'NEGO']);
        Category::create(['name' => 'Dice', 'category_code' => 'DICE']);
        Category::create(['name' => 'Adventure', 'category_code' => 'ADVN']);
        Category::create(['name' => 'Fantasy', 'category_code' => 'FANT']);
        Category::create(['name' => 'Fighting', 'category_code' => 'FIGH']);
        Category::create(['name' => 'Puzzle', 'category_code' => 'PUZZ']);
        Category::create(['name' => 'Miniatures', 'category_code' => 'MINI']);
        Category::create(['name' => 'Territory Building', 'category_code' => 'TERR']);
        Category::create(['name' => 'War Game', 'category_code' => 'WARG']);
        Category::create(['name' => 'Science Fiction', 'category_code' => 'SCIF']);
        Category::create(['name' => 'Civilization', 'category_code' => 'CIVI']);
    }
}
