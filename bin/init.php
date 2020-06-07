<?php

namespace Cable8mm\PhpunitStartKit;

/**
 * excute shell commend include windows
 *
 * @param string $command
 * @return void
 */
function excute_shell($command)
{
    if ((strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')) {
        popen($command, 'r');

        return;
    }

    shell_exec($command);
    return;
}

// validate
if (count($argv) == 1) {
    exit("error - need argv. ex) type \"php init.php Cable8mm\\\\Library\"\n");
}

/**
 * namespace
 * @example Cable8mm\\Library
 */
$namespace = $argv[1];

// replace App to your namespace in composer.json
echo '1. replace composer.json';
$filename = 'composer.json';

$composer = \json_decode(\file_get_contents($filename), true);
unset($composer['autoload']['psr-4']);
$composer['autoload']['psr-4'][$namespace . '\\'] = 'src/';
\file_put_contents(
    $filename,
    \json_encode($composer, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
);
echo ' > done' . PHP_EOL;

// replace App to your namespace in src/StartKit.php
echo '2. replace StartKit.php';
$filename = 'src/StartKit.php';

$startKit = \file_get_contents($filename);
$startKit = \preg_replace(
    '/^namespace App;$/m',
    'namespace ' . $namespace . ';',
    $startKit
);
\file_put_contents($filename, $startKit);
echo ' > done' . PHP_EOL;

// replace App to your namespace in tests/unit/StartKitTest.php
echo '3. replace StartKitTest.php';
$filename = 'tests/unit/StartKitTest.php';

$startKitTest = \file_get_contents($filename);
$startKitTest = \preg_replace(
    '/App(\\\StartKit)/m',
    $namespace . '\\StartKit',
    $startKitTest
);
\file_put_contents($filename, $startKitTest);
echo ' > done' . PHP_EOL;

// remove init.php
echo '4. composer update' . PHP_EOL;
shell_exec('composer update');

// remove init.php
echo '5. remove install file' . PHP_EOL;
unlink('bin/init.php');
