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
        $factory = Publisher::factory();
        $factory->createMany([ ['name' => 'Fantasy Flight Games', 'publisher_code' => 'FFG'] ]);
        $factory->createMany([ ['name' => 'Z-Man Games', 'publisher_code' => 'ZMG'] ]);
        $factory->createMany([ ['name' => 'KOSMOS', 'publisher_code' => 'KOS'] ]);
        $factory->createMany([ ['name' => 'Days of Wonder', 'publisher_code' => 'DOW'] ]);
        $factory->createMany([ ['name' => 'Cool Mini or Not', 'publisher_code' => 'CMN'] ]);
        $factory->createMany([ ['name' => 'Ravensburger', 'publisher_code' => 'RVN'] ]);
        $factory->createMany([ ['name' => 'Rio Grande Games', 'publisher_code' => 'RGG'] ]);
    }
}
