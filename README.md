# Active scope file for Laravel

Active scope file for Laravel. Filter your records based on an active column

## Donate

Find this project useful? You can support me with a Paypal donation:

[Make Paypal Donation](https://www.paypal.com/donate/?hosted_button_id=2XCS6R3CTC5BA)

## Installation

For a quick install, run this from your project root:
```bash
mkdir -p app/Scopes
wget https://raw.githubusercontent.com/pixsil/laravel-active-scope/main/scopes/ActiveScope.php -O app/Scopes/ActiveScope.php

mkdir -p app/Traits
wget https://raw.githubusercontent.com/pixsil/laravel-active-scope/refs/heads/main/traits/ActiveTrait.php -O app/Traits/ActiveTrait.php
```

## Usage

Use the scope like this:

```php
Car::active()->get();
```

If you want the active scoope always be active use the following model method.

```php
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
```
