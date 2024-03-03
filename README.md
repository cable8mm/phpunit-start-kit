This serves as a template for creating a new library.

## Features

- [x] Built-in PHPUnit and lint libraries
- [x] Pre-configured GitHub Actions
- [x] Pre-configured `composer.json` and `phpunit.xml` files as part of the skeleton
- [x] Built-in CHANGELOG.md file and automatic commit action
- [x] Built-in MIT License document

## Install

```sh
composer require cable8mm/phpunit-start-kit
```

## Usage

```sh
composer create-project cable8mm/phpunit-start-kit <package_name>
```

You can customize `src/StartKit.php` and `tests/StartKitTest.php`, and modify `composer.json` to tailor it to your package name and author information.

## Formatting

```sh
composer lint
```

## Test

```sh
composer test
```

## License

The Phpunit Start Kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
