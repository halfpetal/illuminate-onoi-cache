# Onoi Cache - Illuminate Driver
*This package is based, heavily, off of teamreflex's. We only rewrote it to ensure it's still valid with current versions of Laravel as the referenced package is 2 years old and hasn't been touched.*
*To be honest, it's basically the exact same thing...we just want to make sure it's maintained.*

## Install
```sh
composer require halfpetal/illuminate-onoi-cache
```

## Usage
```php
use Halfpetal\Onoi\Illuminate\Cache;
use lluminate\Cache\Repository;

$cache = new Cache(app(Repository::class));
```