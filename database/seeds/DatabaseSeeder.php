<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuSeeder::class);
        $this->call(FreightOfferSeeder::class);
        $this->call(FreightSeeder::class);
        $this->call(ProduceSeeder::class);
    }
}
