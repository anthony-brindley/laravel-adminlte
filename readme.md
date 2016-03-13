## Laravel 5.2 with AdminLTE 2.3 ##

This is a fresh copy of Laravel 5.2 with small modifications:

- Integrated AdminLTE 2.3.2 with the following dependencies:
-- Bootstrap 3.3.6
-- jQuery 2.2.1 
-- Font-Awesome 4.5.0
-- HTML5Shiv 3.7.3 (for older IE versions)
-- Respond.js 1.4.2 (for older IE versions)
-- Ionicons 2.0.1
- All dependencies can be managed via NPM and Laravel Elixir

## Installation

```
#!bash
# Get the project
mkdir myproject && cd myproject
git clone git clone https://github.com/laragems/laravel-adminlte.git .

# Install required packages
composer install
npm install
npm install -g gulp

# Run gulp to compile your dependencies
gulp

# Make Laravel folders writable
chmod -R o+w storage
chmod -R o+w bootstrap/cache

# Create your environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Visit your new app with a beautiful template!
php artisan serve
```

## Modify the layout as you need
- The template files are in resources/views/template
- The default route for the homepage is stored in `app/Http/routes.php`
- Explore `gulpfile.js` and `package.json` on the application's root directory

## Official Laravel Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Official AdminLTE Documentation

Documentation for the template can be found on the [Almsaeed Studio website](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html).
