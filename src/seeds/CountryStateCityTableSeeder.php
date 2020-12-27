<?php
use Illuminate\Database\Seeder;
use App\Country;
use App\State;
use App\City;
use App\Providers\CountryStateCityProvider;


class CountryStateCityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert(CountryStateCityProvider::Countries());

        State::insert(CountryStateCityProvider::States());

        foreach (collect(CountryStateCityProvider::Cities())->chunk(15000) as $chunkCities){
            City::insert($chunkCities->toArray());
        }
    }
}
