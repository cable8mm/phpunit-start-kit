# Phpunit Start Kit

[![Latest Stable Version](https://poser.pugx.org/cable8mm/phpunit-start-kit/v)](//packagist.org/packages/cable8mm/phpunit-start-kit)
[![Total Downloads](https://poser.pugx.org/cable8mm/phpunit-start-kit/downloads)](//packagist.org/packages/cable8mm/phpunit-start-kit)
[![StyleCI](https://github.styleci.io/repos/198655101/shield?branch=master)](https://github.styleci.io/repos/198655101)
[![Build Status](https://travis-ci.org/cable8mm/phpunit-start-kit.svg?branch=master)](https://travis-ci.org/cable8mm/phpunit-start-kit)
![PHP Composer](https://github.com/cable8mm/phpunit-start-kit/workflows/PHP%20Composer/badge.svg)
[![License](https://poser.pugx.org/cable8mm/phpunit-start-kit/license)](//packagist.org/packages/cable8mm/phpunit-start-kit)

## About

Phpunit Start Kit is a PHP-TDD-Skeleton for library like Sympony Components.

## Usage

If your namespace is `Cable8mm\PhpunitStartKit`,

Install:

```sh
composer create-project cable8mm/phpunit-start-kit project-name
cd project-name
composer start Cable8mm\\PhpunitStartKit
```

Test:

```sh
➜  phpunit-start-kit git:(master) ✗ composer test
PHPUnit 7.5.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 89 ms, Memory: 10.00MB

OK (1 test, 1 assertion)
➜  phpunit-start-kit git:(master) ✗
```

Additional it provides both `StyleCI` and `TravisCI` and `Github Action` config files(`.styleci.yml`, `.travis.yml`, `php.yml`).

## License

The Phpunit Start Kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
