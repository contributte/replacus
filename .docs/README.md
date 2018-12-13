# Replacus

Parameter & placeholder replacer

## Usage

```php
use Contributte\Replacus;

$replacus = Replacus::create();
$replacus->replace('https://{$domain}', ['domain' => 'contributte.org']);
```
