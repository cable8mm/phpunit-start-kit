<?php

namespace Cable8mm\PhpunitStartKit;

if (count($argv) == 1) {
    echo "error - need argv. ex) type \"php init.php Cable8mm\\\\Library\"\n";
    exit;
}

$namespace = $argv[1];

echo '1. replace composer.json';

$composer = json_decode(file_get_contents('composer.json'), true);
unset($composer['autoload']['psr-4']);
$composer['autoload']['psr-4'][$namespace . '\\'] = 'src/';

\file_put_contents('composer.json', json_encode($composer, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

echo ' > done' . PHP_EOL;

echo '2. replace StartKit.php';

$startKit = \file_get_contents('src/StartKit.php');
$startKit = preg_replace('/^namespace App;$/m', 'namespace ' . $namespace . ';', $startKit);
file_put_contents('src/StartKit.php', $startKit);

echo ' > done' . PHP_EOL;

echo '3. composer install' . PHP_EOL;

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $output = popen('composer install', 'r');
} else {
    $output = shell_exec('composer install');
}

echo 'composer installed' . PHP_EOL;

echo PHP_EOL . 'enjoy TDD' . PHP_EOL;
