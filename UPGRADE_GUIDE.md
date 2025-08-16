# Upgrade Guide: PHP 8.3 and Laravel 12 Compatibility

This document outlines all the changes made to upgrade the `usamamuneerchaudhary/country-city-state` package for PHP 8.3+ and Laravel 12+ compatibility.

## Major Changes

### 1. PHP Version Requirement
- **Before**: PHP >= 7.3
- **After**: PHP ^8.3

### 2. Laravel Version Support
- **Before**: Laravel 5.8.*|^6.0|^7.0|^8.0
- **After**: Laravel ^12.0

### 3. Dependencies Updated
- **Before**: 
  - `orchestra/testbench`: 6.7.*
  - `phpunit/phpunit`: ^7.0|^8.0|^9.0
- **After**:
  - `phpunit/phpunit`: ^12.0

## Code Changes

### Migration Updates
- Updated migration syntax to use anonymous classes (Laravel 12 style)
- Fixed foreign key constraints using modern `foreignId()` syntax
- Removed deprecated `bigIncrements()` in favor of `id()`
- Replaced `timestamp()->useCurrent()` with `timestamps()`
- Fixed foreign key syntax for `country_phone_codes` table

### Model Updates
- **Namespace Changes**: All models moved from `App\Models` to `UsamaMuneerChaudhary\CountryCityState\Models`
- **Type Hints**: Added proper return type hints for all relationship methods
- **Imports**: Added proper imports for Eloquent relationship classes

### Service Provider Updates
- Enabled migration loading with `loadMigrationsFrom()`
- Fixed asset publishing paths
- Added configuration file publishing
- Registered the main service class properly

### Main Service Class
- Enhanced `CountryCityState` class with useful methods
- Added proper type hints and return types
- Implemented basic CRUD operations for countries, states, and cities

### Seeder Updates
- Fixed namespace to use package namespace
- Updated model imports to use correct namespaces
- Added helper class import

### Configuration
- Created proper configuration file with common settings
- Added configuration publishing in service provider

### Testing
- Updated PHPUnit configuration for PHPUnit 11 compatibility
- Removed deprecated PHPUnit attributes
- Created basic test structure (will be enhanced when Orchestra Testbench supports Laravel 12)

## Breaking Changes

### For Package Users
1. **PHP Version**: Must upgrade to PHP 8.3+
2. **Laravel Version**: Must upgrade to Laravel 12+
3. **Model Namespaces**: If using models directly, update namespace references
4. **Migration**: Old migrations may not work with new syntax

### For Package Developers
1. **Testing**: Orchestra Testbench not yet compatible with Laravel 12
2. **Dependencies**: All dependencies updated to latest compatible versions

## Installation

### New Installation
```bash
composer require usamamuneerchaudhary/country-city-state
php artisan vendor:publish --tag=CountryCityState
php artisan vendor:publish --tag=config
php artisan migrate
```

### Upgrading from Previous Version
1. Update PHP to 8.3+
2. Update Laravel to 12+
3. Update package to latest version
4. Run migrations (may need to rollback and re-run)
5. Update any custom code using old model namespaces

## Usage Examples

### Via Facade
```php
use UsamaMuneerChaudhary\CountryCityState\Facades\CountryCityState;

$countries = CountryCityState::getCountries();
$states = CountryCityState::getStatesByCountry(1);
```

### Via Service Container
```php
$service = app('country-city-state');
$countries = $service->getCountries();
```

### Direct Model Usage
```php
use UsamaMuneerChaudhary\CountryCityState\Models\Country;

$country = Country::where('iso_code2', 'US')->first();
```

## Testing

Currently, the package has basic tests that work without Laravel framework integration. Full testing capabilities will be available when Orchestra Testbench supports Laravel 12.

```bash
composer test
```

## Future Updates

- Add Orchestra Testbench when Laravel 12 support is available
- Enhance test coverage with full Laravel integration
- Add more utility methods to the main service class
- Consider adding caching layer for better performance

## Support

For issues or questions related to this upgrade:
- Check the [README.md](README.md) for usage examples
- Review the [CHANGELOG.md](CHANGELOG.md) for detailed changes
- Open an issue on the GitHub repository
