# Contributte / Replacus

Parameter & placeholder replacer

## Content

- [Setup](#setup)
- [Usage](#usage)

## Setup

```bash
composer require contributte/replacus
```

## Usage

```php
use Contributte\Replacus\Replacus;

$replacus = Replacus::create();
$replacus->replace('https://{$domain}', ['domain' => 'contributte.org']);
```
