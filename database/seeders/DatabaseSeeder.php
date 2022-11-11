<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\GameFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        GameFactory::factory(10)->create();

        $this->call([
            PublisherSeeder::class,
            CategorySeeder::class,
            GameSeeder::class,
        ]);

    }

}
