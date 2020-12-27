<?php

namespace usamamuneerchaudhary\CountryStateCityData;

use Illuminate\Support\Facades\Facade;


class CountryStateCityDataFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'country-city-state-data';
    }
}
