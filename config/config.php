<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Package Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains configuration options for the Country City State package.
    |
    */

    // Default status for new countries, states, and cities
    'default_status' => 'active',

    // Table names (if you want to customize them)
    'tables' => [
        'countries' => 'countries',
        'states' => 'states',
        'cities' => 'cities',
        'country_phone_codes' => 'country_phone_codes',
    ],

    // Cache settings
    'cache' => [
        'enabled' => true,
        'ttl' => 3600, // 1 hour
    ],

    // Seeder settings
    'seeder' => [
        'truncate_before_seeding' => false,
    ],
];