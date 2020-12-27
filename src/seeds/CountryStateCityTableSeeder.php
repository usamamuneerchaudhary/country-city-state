<?php
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Providers\CountryCityStateProvider;


class CountryCityStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert(CountryCityStateProvider::Countries());

        State::insert(CountryCityStateProvider::States());

        foreach (collect(CountryCityStateProvider::Cities())->chunk(15000) as $chunkCities){
            City::insert($chunkCities->toArray());
        }
    }
}
