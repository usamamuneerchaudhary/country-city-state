<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\CountryPhoneCode;


class CountryCityStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
      $countries = CountryCityStateHelper::countries();
        foreach ($countries as $country) {
            Country::firstOrCreate($country);
        }

        $states = CountryCityStateHelper::states();
        foreach ($states as $state) {
            State::firstOrCreate($state);
        }

        $cities = CountryCityStateHelper::cities();
        foreach ($cities as $city) {
            City::firstOrCreate($city);
        }
        
        $codes = CountryCityStateHelper::phoneCodes();
        foreach ($codes as $code) {
            CountryPhoneCode::create($code);
        }
    }
}
