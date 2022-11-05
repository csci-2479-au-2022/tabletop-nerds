<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([ ['name' => 'Fantasy Flight Games', 'publisher_code' => 'FFG'] ]);
        Publisher::create([ ['name' => 'Z-Man Games', 'publisher_code' => 'ZMG'] ]);
        Publisher::create([ ['name' => 'KOSMOS', 'publisher_code' => 'KOS'] ]);
        Publisher::create([ ['name' => 'Days of Wonder', 'publisher_code' => 'DOW'] ]);
        Publisher::create([ ['name' => 'Cool Mini or Not', 'publisher_code' => 'CMN'] ]);
        Publisher::create([ ['name' => 'Ravensburger', 'publisher_code' => 'RVN'] ]);
        Publisher::create([ ['name' => 'Rio Grande Games', 'publisher_code' => 'RGG'] ]);
    }
}
