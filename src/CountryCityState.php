<?php

namespace UsamaMuneerChaudhary\CountryCityState;

use UsamaMuneerChaudhary\CountryCityState\Models\Country;
use UsamaMuneerChaudhary\CountryCityState\Models\State;
use UsamaMuneerChaudhary\CountryCityState\Models\City;
use UsamaMuneerChaudhary\CountryCityState\Models\CountryPhoneCode;
use Illuminate\Database\Eloquent\Collection;

class CountryCityState
{
    /**
     * Get all countries
     */
    public function getCountries(): Collection
    {
        return Country::where('status', 'active')->get();
    }

    /**
     * Get states by country ID
     */
    public function getStatesByCountry(int $countryId): Collection
    {
        return State::where('country_id', $countryId)
            ->where('status', 'active')
            ->get();
    }

    /**
     * Get cities by state ID
     */
    public function getCitiesByState(int $stateId): Collection
    {
        return City::where('state_id', $stateId)
            ->where('status', 'active')
            ->get();
    }

    /**
     * Get phone codes by country ID
     */
    public function getPhoneCodesByCountry(int $countryId): Collection
    {
        return CountryPhoneCode::where('country_id', $countryId)->get();
    }

    /**
     * Find country by ISO code
     */
    public function findCountryByIso(string $isoCode): ?Country
    {
        return Country::where('iso_code2', $isoCode)
            ->orWhere('iso_code3', $isoCode)
            ->where('status', 'active')
            ->first();
    }
}
