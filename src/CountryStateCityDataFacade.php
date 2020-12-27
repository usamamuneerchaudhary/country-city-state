<?php

namespace Laravel\CountryCityStateData;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laravel\CountryCityStateData\Skeleton\SkeletonClass
 */
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
