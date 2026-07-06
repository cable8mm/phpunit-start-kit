# PHPUnit Start Kit

[![code-style](https://github.com/cable8mm/phpunit-start-kit/actions/workflows/code-style.yml/badge.svg)](https://github.com/cable8mm/phpunit-start-kit/actions/workflows/code-style.yml)
[![run-tests](https://github.com/cable8mm/phpunit-start-kit/actions/workflows/run-tests.yml/badge.svg)](https://github.com/cable8mm/phpunit-start-kit/actions/workflows/run-tests.yml)
![PHP Version](https://img.shields.io/packagist/dependency-v/cable8mm/phpunit-start-kit/php)
![Packagist Version](https://img.shields.io/packagist/v/cable8mm/phpunit-start-kit)
![Packagist Downloads](https://img.shields.io/packagist/dt/cable8mm/phpunit-start-kit)
![Packagist License](https://img.shields.io/packagist/l/cable8mm/phpunit-start-kit)

A starter kit for creating PHP libraries with PHPUnit testing and modern development tools.

## Requirements

- PHP 8.3 or higher
- Composer 2.0 or higher

## Features

- ✅ **Pest Testing**: Pre-configured Pest 4.x support with example tests
- ✅ **Code Linting**: Laravel Pint for automatic code style enforcement
- ✅ **CI/CD Ready**: GitHub Actions workflows for testing and code style
- ✅ **Auto CHANGELOG**: Automatic changelog updates on GitHub releases
- ✅ **Modern PHP**: PHP 8.3+ with strict types and PSR-4 autoloading
- ✅ **EditorConfig**: Consistent coding styles across editors
- ✅ **Complete Documentation**: README, CHANGELOG, and MIT License included

## Installation

### As a Template (Recommended)

Create a new project from this starter kit:

```sh
composer create-project cable8mm/phpunit-start-kit <package_name>
cd <package_name>
```

### As a Dependency

```sh
composer require cable8mm/phpunit-start-kit
```

## Quick Start

1. **Update package information** in `composer.json`:
   - Change `name` to your package name (e.g., `your-vendor/your-package`)
   - Update `authors` information
   - Add your package dependencies

2. **Customize the source code**:
   - Modify `src/StartKit.php` with your implementation
   - Update namespace to match your package

3. **Write tests**:
   - Update `tests/StartKitTest.php` with your test cases
   - Add more test files as needed

4. **Update documentation**:
   - Edit `README.md` with your project description
   - Update `CHANGELOG.md` with your release notes

## Available Commands

```sh
# Run tests
composer test

# Check code style
composer inspect

# Fix code style automatically
composer lint

# Generate API documentation (requires doctum.phar)
composer apidoc
```

## Project Structure

```
.
├── src/
│   └── StartKit.php          # Main source code
├── tests/
│   └── StartKitTest.php      # Test files
├── .github/
│   └── workflows/
│       ├── run-tests.yml     # Automated testing
│       ├── code-style.yml    # Code linting
│       └── update-changelog.yml  # Auto CHANGELOG updates
├── composer.json             # Package configuration
├── phpunit.xml               # PHPUnit configuration
├── .editorconfig             # Editor configuration
├── CHANGELOG.md              # Change log
└── README.md                 # Project documentation
```

## GitHub Actions Workflows

This starter kit includes three pre-configured GitHub Actions:

1. **run-tests.yml**: Runs tests on multiple PHP versions (8.2, 8.3, 8.4, 8.5)
2. **code-style.yml**: Automatically fixes code style with Laravel Pint
3. **update-changelog.yml**: Updates CHANGELOG.md when a new release is published

## Testing

The kit includes example tests using Pest's elegant syntax:

```php
test('it can be instantiated', function () {
    $startKit = new StartKit;

    expect($startKit)->toBeInstanceOf(StartKit::class);
});
```

## Code Style

This project uses [Laravel Pint](https://laravel.com/docs/pint) for code styling, which follows PSR-12 standards with Laravel conventions.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The PHPUnit Start Kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
