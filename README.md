# 🛠 fuwasegu/php-enum-util
[![Coverage Status](https://coveralls.io/repos/github/fuwasegu/php-enum-util/badge.svg?branch=master)](https://coveralls.io/github/fuwasegu/php-enum-util?branch=master)
![example workflow](https://github.com/fuwasegu/php-enum-util/actions/workflows/ci.yml/badge.svg)
[![MIT License](http://img.shields.io/badge/license-MIT-blue.svg?style=flat)](LICENSE)

The extension library for PHP native enum.

# 📦 Installation
```shell
composer require fuwasegu/php-enum-util
```

# ✏️ Usage
This library provides traits to make Enum, implemented since PHP8.1, easier to use.

### HasDescription trait
This trait provides an interface to the `description()` method and an implementation of the `descriptions()` method.

```php
enum Status: string
{
    use HasDescription;

    case ACTIVE = 'active';

    case INACTIVE = 'inactive';

    case RETIED = 'retired';

    public function description(): string
    {
        return match ($this) {
            self::ACTIVE => 'State in which the employee is enrolled.',
            self::INACTIVE => 'State in which the employee is on administrative leave.',
            self::RETIED => 'State in which employee is retiring.',
        };
    }
}
```

```php
// Getter for Enum description
Status::ACTIVE->description();

// Getter for Enum value and description maps
Status::descriptions();
```

### HasLabel trait
This trait provides an interface to the `label()` method and an implementation of the `labels()` method.

```php
enum Capital: int
{
    use HasLabel;

    case TOKYO = 1;

    case BEIJING = 2;

    case WASHINGTON = 3;

    case LONDON = 4;

    public function label(): string
    {
        return match ($this) {
            self::TOKYO => 'Tokyo',
            self::BEIJING => 'Beijing',
            self::WASHINGTON => 'Washington',
            self::LONDON => 'London',
        };
    }
}
```

```php
// Getter for Enum label
Status::ACTIVE->label();

// Getter for Enum value and label maps
Status::labels();
```

> 📌 NOTICE:
> 
> There is no implementation difference between the HasLabel and HasDescription traits. The difference is the method name. 
> 
> Choose the former if you want a short label for an enum, and choose the latter if you want a long description.

### HasValues trait
This trait is the value version of the `cases()` method originally implemented in Enum, and provides auxiliary methods.

```php
enum Status: string
{
    use HasValues;

    case ACTIVE = 'active';

    case INACTIVE = 'inactive';

    case RETIED = 'retired';
}
```

```php
// Getter for Enum values
Status::values();

// Join Enum values with a string
Status::implodeValues();
```

### HasNames trait
This trait is the name version of the `cases()` method originally implemented in Enum, and provides auxiliary methods.

```php
enum Status: string
{
    use HasNames;

    case ACTIVE = 'active';

    case INACTIVE = 'inactive';

    case RETIED = 'retired';
}
```

```php
// Getter for Enum names
Status::names();

// Join Enum names with a string
Status::implodeNames();
```

### Comparable trait
This trait provides a method for easy comparison of Bakced Enums

```php
enum Status: string
{
    use Comparable;

    case ACTIVE = 'active';

    case INACTIVE = 'inactive';

    case RETIED = 'retired';
}
```

```php
// Compare Enum peer to peer
$maybeActive = Status::ACTIVE;
Status::ACTIVE->is($maybeActive); // true
Status::INACTIVE->isNot($maybeActive); // false

// Attempts to convert the compared int or string to an Enum with Enum::tryFrom before comparing
// If tryFrom is null, `isFrom()` returns false and `isNotFrom()` returns true.
$value = 'active';
Status::ACTIVE->isFrom($value); // true
Status::INACTIVE->isNotFrom($value); // false
Status::ACTIVE->isFrom('foo'); // false
Status::ACTIVE->isNotFrom('foo') // true
```