# LiquidSolid

LiquidSolid is a University project based on Laravel which allows users to post ads online for animal sales. Given the ability to customise ads and is fully moderated by admins.

## Requirements
 - PHP 7.0
 - Nginx
 - MySQL 5.6

## Installation
Fastest way to install and get requirements up and running is using [Laravel Homestead](https://laravel.com/docs/homestead).

Clone into Homestead directory.
```
git clone https://github.com/johanleroux/liquidsolid.git
```

Set working directory to LiquidSolid

Copy over environment file and update details to your environment.
```
cp .env.example .env
```

Update dependencies
```
composer update
```

Set Application Key
```
php artisan key:generate
```

Migrate DB and Seed Initial Data
```
php artisan migrate --seed
```

## Usage
Details username and password is set
```
admin@example.com
secret
```

## License
The MIT License (MIT). Please see [License File](license.md) for more information.