<?php

namespace UsamaMuneerChaudhary\CountryCityState\seeds;

use Illuminate\Database\Seeder;
use UsamaMuneerChaudhary\CountryCityState\Models\Country;
use UsamaMuneerChaudhary\CountryCityState\Models\State;
use UsamaMuneerChaudhary\CountryCityState\Models\City;
use UsamaMuneerChaudhary\CountryCityState\Models\CountryPhoneCode;
use UsamaMuneerChaudhary\CountryCityState\Helpers\CountryCityStateHelper;

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
