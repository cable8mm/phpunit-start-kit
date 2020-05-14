# phpunit-start-kit

[![StyleCI](https://github.styleci.io/repos/198655101/shield?branch=master)](https://github.styleci.io/repos/198655101)
[![Build Status](https://travis-ci.org/cable8mm/phpunit-start-kit.svg?branch=master)](https://travis-ci.org/cable8mm/phpunit-start-kit)
![PHP Composer](https://github.com/cable8mm/phpunit-start-kit/workflows/PHP%20Composer/badge.svg)

## About

Phpunit Start-Kit은 TDD 개발방법론에 따라 라이브러리를 만들기 위한 최소의 실행 코드를 제공합니다.

## Usage

- git clone 혹은 ZIP 파일을 다운로드 받은 후 원하는 폴더에 복사합니다.
- composer start `namespace`

프로젝트 폴더가 `phpunit-start-kit`이고, 네임스페이스가 `Cable8mm\PhpunitStartKit`일 경우 아래와 같이 설치하세요.

```sh
> git clone https://github.com/cable8mm/phpunit-start-kit.git phpunit-start-kit
> cd phpunit-start-kit
> composer start Cable8mm\\PhpunitStartKit
```

## 테스트 방법

프로젝트 폴더에서 `composer test` 명령어를 입력하여 `phpunit`을 실행하세요.

```sh
➜  phpunit-start-kit git:(master) ✗ composer test
PHPUnit 7.5.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 89 ms, Memory: 10.00MB

OK (1 test, 1 assertion)
➜  phpunit-start-kit git:(master) ✗
```
