<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;


class CountryCityStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert(CountryCityStateHelper::countries());

        State::insert(CountryCityStateHelper::states());

        foreach (collect(CountryCityStateHelper::cities())->chunk(15000) as $chunkCities){
            City::insert($chunkCities->toArray());
        }
    }
}
