# Country, City, State Data

World's Country City State Data for Laravel `^12.0` with PHP `^8.3` and phone codes support as per ISO standards.

## 🚀 Requirements

- **PHP**: ^8.3
- **Laravel**: ^12.0

## 📦 Installation

You can install the package via composer:

```bash
composer require usamamuneerchaudhary/country-city-state
```

## 🔧 Setup

### 1. Publish Assets

```bash
# Publish migrations, models, helpers, and seeders
php artisan vendor:publish --tag=CountryCityState

# Publish configuration file
php artisan vendor:publish --tag=config
```

### 2. Run Migrations

```bash
php artisan migrate
```

### 3. (Optional) Run Seeder

```bash
php artisan db:seed --class=UsamaMuneerChaudhary\\CountryCityState\\seeds\\CountryCityStateTableSeeder
```

## 💡 Usage

### Using the Facade

```php
use UsamaMuneerChaudhary\CountryCityState\Facades\CountryCityState;

// Get all active countries
$countries = CountryCityState::getCountries();

// Get states by country ID
$states = CountryCityState::getStatesByCountry(1);

// Get cities by state ID
$cities = CountryCityState::getCitiesByState(1);

// Get phone codes by country ID
$phoneCodes = CountryCityState::getPhoneCodesByCountry(1);

// Find country by ISO code
$country = CountryCityState::findCountryByIso('US');
```

### Using the Service Container

```php
$service = app('country-city-state');
$countries = $service->getCountries();
```

### Direct Model Usage

```php
use UsamaMuneerChaudhary\CountryCityState\Models\Country;
use UsamaMuneerChaudhary\CountryCityState\Models\State;
use UsamaMuneerChaudhary\CountryCityState\Models\City;

// Find country by ISO code
$country = Country::where('iso_code2', 'US')->first();

// Get all states for a country
$states = $country->states;

// Get all cities for a state
$cities = $states->first()->cities;

// Find state by name
$state = State::where('name', 'California')->first();

// Find city by name
$city = City::where('name', 'Los Angeles')->first();
```

### Working with Relationships

```php
// Country -> States -> Cities
$country = Country::find(1);
$states = $country->states; // HasMany relationship

$state = $states->first();
$cities = $state->cities; // HasMany relationship

// Reverse relationships
$city = City::find(1);
$state = $city->state; // BelongsTo relationship
$country = $state->country; // BelongsTo relationship
```

## ⚙️ Configuration

The package configuration file will be published to `config/country-city-state.php`. You can customize:

- **Default Status**: Set default status for new records (`active`/`inactive`)
- **Table Names**: Customize database table names if needed
- **Cache Settings**: Enable/disable caching and set TTL
- **Seeder Behavior**: Control seeder truncation behavior

```php
return [
    'default_status' => 'active',
    'tables' => [
        'countries' => 'countries',
        'states' => 'states',
        'cities' => 'cities',
        'country_phone_codes' => 'country_phone_codes',
    ],
    'cache' => [
        'enabled' => true,
        'ttl' => 3600, // 1 hour
    ],
    'seeder' => [
        'truncate_before_seeding' => false,
    ],
];
```

## 🗄️ Database Structure

The package creates the following tables:

### Countries Table
- `id` - Primary key
- `name` - Country name
- `iso_code2` - 2-letter ISO code (e.g., US, GB)
- `iso_code3` - 3-letter ISO code (e.g., USA, GBR)
- `num_code` - Numeric ISO code
- `status` - Active/Inactive status
- `created_at`, `updated_at` - Timestamps
- `deleted_at` - Soft delete timestamp

### States Table
- `id` - Primary key
- `country_id` - Foreign key to countries table
- `name` - State/Province name
- `status` - Active/Inactive status
- `created_at`, `updated_at` - Timestamps
- `deleted_at` - Soft delete timestamp

### Cities Table
- `id` - Primary key
- `state_id` - Foreign key to states table
- `name` - City name
- `status` - Active/Inactive status
- `created_at`, `updated_at` - Timestamps
- `deleted_at` - Soft delete timestamp

### Country Phone Codes Table
- `id` - Primary key
- `phone_code` - Country calling code
- `intl_dialing_prefix` - International dialing prefix
- `country_id` - Foreign key to countries table
- `created_at`, `updated_at` - Timestamps

## 🧪 Testing

```bash
composer test
```

## 📝 What's New in v2.0

- ✅ **PHP 8.3+ Support** - Modern PHP features and performance
- ✅ **Laravel 12+ Support** - Latest Laravel framework compatibility
- ✅ **Modern Migration Syntax** - Anonymous classes and improved foreign keys
- ✅ **Enhanced Service Class** - Useful methods for common operations
- ✅ **Proper Type Hints** - Better IDE support and code quality
- ✅ **Configuration Support** - Customizable package settings
- ✅ **Improved Namespaces** - Better package organization
- ✅ **PHPUnit 11** - Latest testing framework

## 🔄 Upgrading from v1.x

If you're upgrading from version 1.x, please note:

1. **PHP 8.3+ Required** - Update your PHP version
2. **Laravel 12+ Required** - Update your Laravel version
3. **Model Namespaces Changed** - Update any direct model references
4. **Migration Updates** - May need to rollback and re-run migrations

See [UPGRADE_GUIDE.md](UPGRADE_GUIDE.md) for detailed upgrade instructions.

## 🤝 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email hello@usamamuneer.me instead of using the issue tracker.

## 📄 License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## 👨‍💻 Credits

- [Usama Muneer](https://github.com/usamamuneerchaudhary)
- [All Contributors](../../contributors)

---

**Note**: This package is now fully compatible with PHP 8.3+ and Laravel 12+. For older versions, please use v1.x of the package.
