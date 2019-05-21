# Core PHP Container

This is the default container used in the [Core PHP Framework](https://github.com/AhmedRaafat14/corephp-framework). It is [PSR-11](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md) compatable.

## Installation

### Requirements

PHP >= 7.0.0

### Via Composer

Installation via [Composer](https://getcomposer.org/) is the recommended method of installation.

```bash
composer require learncorephp/container
```

## Basic Usage

```php
<?php

use Core\Container\Contracts;

// Create a new Container instance
$container = new Container;

// Add via Factory
$this->addFactory('SomeGreatProject', function() {
    return new Some\Great\Project;
});

// Add via Constructor
$this->addClass('SomeGreatProject', Some\Great\Project::class);

// Add via Setter
$this->addSetter('SomeGreatProject', 'Some\Great\Project', [
    'setName' => 'ThisIsHell'
]);

// Return a new instance
$awesome = $container->get('SomeGreatProject');
```