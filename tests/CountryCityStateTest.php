<?php

namespace UsamaMuneerChaudhary\CountryCityState\Tests;

use UsamaMuneerChaudhary\CountryCityState\CountryCityState;

class CountryCityStateTest extends TestCase
{
    public function test_service_class_exists()
    {
        $service = new CountryCityState();
        $this->assertInstanceOf(CountryCityState::class, $service);
    }

    public function test_service_class_methods_exist()
    {
        $service = new CountryCityState();
        
        // Test that methods exist and are callable
        $this->assertTrue(method_exists($service, 'getCountries'));
        $this->assertTrue(method_exists($service, 'getStatesByCountry'));
        $this->assertTrue(method_exists($service, 'getCitiesByState'));
        $this->assertTrue(method_exists($service, 'getPhoneCodesByCountry'));
        $this->assertTrue(method_exists($service, 'findCountryByIso'));
    }

    public function test_package_namespace_is_correct()
    {
        $this->assertEquals(
            'UsamaMuneerChaudhary\\CountryCityState\\CountryCityState',
            CountryCityState::class
        );
    }
}
