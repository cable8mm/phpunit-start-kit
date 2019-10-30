# phpunit-start-kit #

## About ##

Phpunit Start-Kit은 TDD 개발방법론에 따라 라이브러리를 만들기 위한 최소의 실행 코드를 제공합니다.

## 사용 방법 ##

* git clone 혹은 ZIP 파일을 다운로드 받은 후 원하는 폴더에 복사합니다.
* init.php 파일을 실행합니다.

프로젝트 폴더가 "phpunit-start-kit"이고, 네임스페이스가 "Cable8mm\\PhpunitStartKit"일 경우 아래와 같이 설치하세요.

```console
> git clone https://github.com/cable8mm/phpunit-start-kit.git phpunit-start-kit
> cd phpunit-start-kit
> php init.php Cable8mm\\PhpunitStartKit
```

```console
➜  phpunit-start-kit git:(master) ✗ php init.php Cable8mm\\Library
1. replace composer.json > done
2. replace StartKit.php > done
3. replace StartKitTest.php > done
4. composer install
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Warning: The lock file is not up to date with the latest changes in composer.json. You may be getting outdated dependencies. Run update to update them.
    1/5:        https://codeload.github.com/sebastianbergmann/exporter/legacy.zip/234199f4528de6d12aaa58b612e98f7d36adb937
    2/5:        https://codeload.github.com/symfony/polyfill-ctype/legacy.zip/82ebae02209c21113908c229e9883c419720738a
    3/5:        https://codeload.github.com/phpDocumentor/ReflectionCommon/legacy.zip/21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6
    4/5:        https://codeload.github.com/phpDocumentor/TypeResolver/legacy.zip/9c977708995954784726e25d0cd1dddf4e65b0f7
    5/5:        https://codeload.github.com/myclabs/DeepCopy/legacy.zip/e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72
    Finished: success: 5, skipped: 0, failure: 0, total: 5
Package operations: 29 installs, 0 updates, 0 removals
  - Installing symfony/polyfill-ctype (v1.11.0): Loading from cache
  - Installing webmozart/assert (1.4.0): Loading from cache
  - Installing phpdocumentor/reflection-common (1.0.1): Loading from cache
  - Installing phpdocumentor/type-resolver (0.4.0): Loading from cache
  - Installing phpdocumentor/reflection-docblock (4.3.1): Loading from cache
  - Installing phpunit/php-token-stream (3.0.2): Loading from cache
  - Installing sebastian/version (2.0.1): Loading from cache
  - Installing sebastian/type (1.1.3): Loading from cache
  - Installing sebastian/resource-operations (2.0.1): Loading from cache
  - Installing sebastian/recursion-context (3.0.0): Loading from cache
  - Installing sebastian/object-reflector (1.1.1): Loading from cache
  - Installing sebastian/object-enumerator (3.0.3): Loading from cache
  - Installing sebastian/global-state (3.0.0): Loading from cache
  - Installing sebastian/exporter (3.1.0): Loading from cache
  - Installing sebastian/environment (4.2.2): Loading from cache
  - Installing sebastian/diff (3.0.2): Loading from cache
  - Installing sebastian/comparator (3.0.2): Loading from cache
  - Installing phpunit/php-timer (2.1.2): Loading from cache
  - Installing phpunit/php-text-template (1.2.1): Loading from cache
  - Installing phpunit/php-file-iterator (2.0.2): Loading from cache
  - Installing theseer/tokenizer (1.1.3): Loading from cache
  - Installing sebastian/code-unit-reverse-lookup (1.0.1): Loading from cache
  - Installing phpunit/php-code-coverage (7.0.6): Loading from cache
  - Installing doctrine/instantiator (1.2.0): Loading from cache
  - Installing phpspec/prophecy (1.8.1): Loading from cache
  - Installing phar-io/version (2.0.1): Loading from cache
  - Installing phar-io/manifest (1.0.3): Loading from cache
  - Installing myclabs/deep-copy (1.9.1): Loading from cache
  - Installing phpunit/phpunit (8.2.5): Loading from cache
sebastian/global-state suggests installing ext-uopz (*)
phpunit/php-code-coverage suggests installing ext-xdebug (^2.7.2)
phpunit/phpunit suggests installing ext-xdebug (*)
phpunit/phpunit suggests installing phpunit/php-invoker (^2.0.0)
Generating autoload files
composer installed

5. enjoy TDD
PHPUnit 7.5.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 131 ms, Memory: 10.00MB

OK (1 test, 1 assertion)
➜  phpunit-start-kit git:(master) ✗
```

## 테스트 방법 ##

프로젝트 폴더에서 phpunit 명령어를 입력하세요.

```console
➜  phpunit-start-kit git:(master) ✗ phpunit
PHPUnit 7.5.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 89 ms, Memory: 10.00MB

OK (1 test, 1 assertion)
➜  phpunit-start-kit git:(master) ✗
```

각종 에디터의 확장을 이용하면 더 편하게 테스트를 할 수 있습니다.

```console
> /project/folder/phpunit
```
