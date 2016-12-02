# Laravel Timezones

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-timezones
```

And then include the service provider within `app/config/app.php`.

``` php
BrianFaust\Timezones\TimezonesServiceProvider::class
```

To get started, you'll need to publish the vendor assets and migrate the timezones table:

```bash
php artisan vendor:publish --provider="BrianFaust\Timezones\TimezonesServiceProvider" && php artisan migrate
```

Now you can seed the timezones into the database like this.

```bash
php artisan timezones:seed
```

## Usage

``` php
...
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
