<?php

/**
 * Basic Usage Example for Country City State Package
 * 
 * This example shows how to use the package in a Laravel application.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use UsamaMuneerChaudhary\CountryCityState\CountryCityState;
use UsamaMuneerChaudhary\CountryCityState\Models\Country;
use UsamaMuneerChaudhary\CountryCityState\Models\State;
use UsamaMuneerChaudhary\CountryCityState\Models\City;

// Example 1: Using the service class
echo "=== Using Service Class ===\n";
$service = new CountryCityState();

// These methods would work in a Laravel application with database
// For now, we'll just show the structure
echo "Service class methods available:\n";
echo "- getCountries()\n";
echo "- getStatesByCountry(countryId)\n";
echo "- getCitiesByState(stateId)\n";
echo "- getPhoneCodesByCountry(countryId)\n";
echo "- findCountryByIso(isoCode)\n\n";

// Example 2: Direct model usage (in Laravel app)
echo "=== Direct Model Usage ===\n";
echo "You can also use the models directly:\n";
echo "- Country::where('iso_code2', 'US')->first()\n";
echo "- State::where('country_id', 1)->get()\n";
echo "- City::where('state_id', 1)->get()\n\n";

// Example 3: Relationships (in Laravel app)
echo "=== Using Relationships ===\n";
echo "The models have relationships defined:\n";
echo "- \$country->states (hasMany)\n";
echo "- \$state->cities (hasMany)\n";
echo "- \$state->country (belongsTo)\n";
echo "- \$city->state (belongsTo)\n\n";

// Example 4: Configuration
echo "=== Configuration ===\n";
echo "The package publishes a config file to config/country-city-state.php\n";
echo "You can customize:\n";
echo "- Default status for new records\n";
echo "- Table names\n";
echo "- Cache settings\n";
echo "- Seeder behavior\n\n";

echo "=== Installation Steps ===\n";
echo "1. composer require usamamuneerchaudhary/country-city-state\n";
echo "2. php artisan vendor:publish --tag=CountryCityState\n";
echo "3. php artisan vendor:publish --tag=config\n";
echo "4. php artisan migrate\n";
echo "5. php artisan db:seed --class=UsamaMuneerChaudhary\\CountryCityState\\seeds\\CountryCityStateTableSeeder\n";
