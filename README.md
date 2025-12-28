![](https://heatbadger.now.sh/github/readme/contributte/replacus/?deprecated=1)

<p align=center>
    <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
    <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
    <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
    Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Disclaimer

| :warning: | This project is no longer being maintained.
|---|---|

| Composer | [`contributte/replacus`](https://packagist.org/packages/contributte/replacus) |
|---|---|
| Version | ![](https://badgen.net/packagist/v/contributte/replacus) |
| PHP | ![](https://badgen.net/packagist/php/contributte/replacus) |
| License | ![](https://badgen.net/github/license/contributte/replacus) |

## About

Parameter & placeholder replacer based on Latte templating engine.

## Installation

```bash
composer require contributte/replacus
```

## Usage

```php
use Contributte\Replacus\Replacus;

$replacus = Replacus::create();
$replacus->replace('https://{$domain}', ['domain' => 'contributte.org']);
```

## Versions

| State       | Version | Branch   | Latte  | PHP     |
|-------------|---------|----------|--------|---------|
| dev         | `^0.5`  | `master` | `3.0+` | `>=8.1` |
| stable      | `^0.4`  | `master` | `3.0+` | `>=8.1` |

## Development

This package was maintained by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for using this package.
