# PHPUnit Start Kit

[![code-style](https://github.com/cable8mm/phpunit-start-kit/actions/workflows/code-style.yml/badge.svg)](https://github.com/cable8mm/phpunit-start-kit/actions/workflows/code-style.yml)
[![run-tests](https://github.com/cable8mm/phpunit-start-kit/actions/workflows/run-tests.yml/badge.svg)](https://github.com/cable8mm/phpunit-start-kit/actions/workflows/run-tests.yml)
![PHP Version](https://img.shields.io/packagist/dependency-v/cable8mm/phpunit-start-kit/php)
![Packagist Version](https://img.shields.io/packagist/v/cable8mm/phpunit-start-kit)
![Packagist Downloads](https://img.shields.io/packagist/dt/cable8mm/phpunit-start-kit)
![Packagist License](https://img.shields.io/packagist/l/cable8mm/phpunit-start-kit)

A starter kit for creating PHP libraries with PHPUnit testing and modern development tools.

## Requirements

- PHP 8.3 or higher (the CI matrix currently covers PHP 8.3, 8.4, and 8.5)
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

### As a Dependency (example library only)

This package is primarily a project template. Its `StartKit` class is a
placeholder example, so installing it as a dependency is only useful if you
specifically want to use that example class.

```sh
composer require cable8mm/phpunit-start-kit
```

## Quick Start

1. **Update package information** in `composer.json`:
   - Change `name` to your package name (e.g., `your-vendor/your-package`)
   - Update `authors` information
   - Add your package dependencies
2. **Update the package namespace** in `composer.json` and your PHP files.
   Keep the PSR-4 namespace and `src/` directory mapping in sync, then run:

   ```sh
   composer dump-autoload
   ```

3. **Customize the source code**:
   - Modify `src/StartKit.php` with your implementation
   - Update namespace to match your package

4. **Write tests**:
   - Update `tests/StartKitTest.php` with your test cases
   - Add more test files as needed

5. **Update documentation**:
   - Edit `README.md` with your project description
   - Update `CHANGELOG.md` with your release notes
   - Remove or replace the starter-kit badges and repository links

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

1. **run-tests.yml**: Runs tests on PHP 8.3, 8.4, and 8.5
2. **code-style.yml**: Checks code style with Laravel Pint and fails when files need formatting. Run `composer lint` locally to apply fixes.
3. **update-changelog.yml**: Updates `CHANGELOG.md` when a GitHub release is published, then commits the generated entry to the release target branch

## Testing

The kit includes a small Pest example in `tests/StartKitTest.php`. Replace it
with tests for your package. The empty Feature and Unit placeholder tests are
intentionally omitted; add those directories when your project needs them.

```php
test('it can be instantiated', function () {
    $startKit = new StartKit;

    expect($startKit)->toBeInstanceOf(StartKit::class);
});
```

## Code Style

This project uses [Laravel Pint](https://laravel.com/docs/pint) for code styling. Run `composer inspect` to check formatting and `composer lint` to apply fixes.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The PHPUnit Start Kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
