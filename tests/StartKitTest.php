<?php

use Cable8mm\PhpunitStartKit\StartKit;

test('it can be instantiated', function () {
    $startKit = new StartKit;

    expect($startKit)->toBeInstanceOf(StartKit::class);
});

test('example method returns expected string', function () {
    $startKit = new StartKit;
    $result = $startKit->example();

    expect($result)->toBeString()
        ->toBe('Hello, PHPUnit Start Kit!');
});
