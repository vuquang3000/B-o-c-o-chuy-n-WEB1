<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FlightClassTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(AirportTableSeeder::class);
        $this->call(FlightTableSeeder::class);
    }
}
