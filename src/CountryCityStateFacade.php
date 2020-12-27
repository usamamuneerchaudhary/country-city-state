<?php

namespace UsamaMuneerChaudhary\CountryCityState;

use Illuminate\Support\Facades\Facade;


class CountryCityStateFacade extends Facade
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
