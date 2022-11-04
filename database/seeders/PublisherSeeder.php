<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            ['name' => 'Fantasy Flight Games', 'publisher_code' => 'FFG'],
            ['name' => 'Z-Man Games', 'publisher_code' => 'ZMG'],
            ['name' => 'KOSMOS', 'publisher_code' => 'KOS'],
            ['name' => 'Days of Wonder', 'publisher_code' => 'DOW'],
            ['name' => 'Cool Mini or Not', 'publisher_code' => 'CMN'],
            ['name' => 'Ravensburger', 'publisher_code' => 'RVN'],
            ['name' => 'Rio Grande Games', 'publisher_code' => 'RGG'],
        ]);
    }
}
