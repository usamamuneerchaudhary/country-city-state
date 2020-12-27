<?php

namespace UsamaMuneerChaudhary\CountryStateCityData;

use Illuminate\Support\Facades\Facade;


class CountryStateCityFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'country-city-state';
    }
}
