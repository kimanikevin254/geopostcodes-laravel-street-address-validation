# Geopostcodes Laravel Street Address Validation

This project leverages the the street address data provided by [GeoPostcodes](https://www.geopostcodes.com) to create a robust address validation system in Laravel.

To run the project locally, make sure you have the following:

-   [PHP](https://www.php.net/downloads.php) and [Composer](https://getcomposer.org/) installed on your local machine
-   [Node.js and npm](https://nodejs.org/) installed on your local machine

Having met all the prerequisites, follow the steps below:

1. Clone the repo:

    ```bash
    git clone https://github.com/kimanikevin254/geopostcodes-laravel-street-address-validation.git
    ```

2. `cd` into the project folder

    ```bash
    cd geopostcodes-laravel-street-address-validation
    ```

3. Install all dependencies:

    ```bash
    composer install
    ```

4. Run the project:

    ```bash
    php artisan serve
    ```

## Relevant Files

- **Data Files:**
  - `GPC-STRT-GEO-SAMPLE-A1-SELECTED.csv` - Sample street data from GeoPostcodes.

- **Database:**
  - `database/migrations/2024_06_18_063554_create_street_address_table.php` - Defines the street address table schema.
  - `database/seeders/StreetAddressSeeder.php` - Seeds the database with sample street address data.

- **Models:**
  - `app/Models/StreetAddress.php` - The Eloquent model for the street address table.

- **Controllers:**
  - `app/Http/Controllers/StreetAddressController.php` - Handles HTTP requests related to street addresses.

- **Routes:**
  - `routes/web.php` - Defines web routes for the application.

- **Views:**
  - `resources/views/street_address/create.blade.php` - The Blade template for the street address input form.
