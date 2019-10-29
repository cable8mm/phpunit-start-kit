<?php

namespace Cable8mm\PhpunitStartKit;

if (\count($argv) == 1) {
    echo "error - need argv. ex) type \"php init.php Cable8mm\\\\Library\"\n";
    exit;
}

$isWindow = (\strtoupper(\substr(PHP_OS, 0, 3)) === 'WIN');

$namespace = $argv[1];  // eg. Cable8mm\\Library

echo '1. replace composer.json';        $filename = 'composer.json';

$composer = \json_decode(\file_get_contents($filename), true);
unset($composer['autoload']['psr-4']);
$composer['autoload']['psr-4'][$namespace . '\\'] = 'src/';
\file_put_contents($filename, \json_encode($composer, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
echo ' > done' . PHP_EOL;

echo '2. replace StartKit.php';         $filename = 'src/StartKit.php';

$startKit = \file_get_contents($filename);
$startKit = \preg_replace('/^namespace App;$/m', 'namespace ' . $namespace . ';', $startKit);
\file_put_contents($filename, $startKit);
echo ' > done' . PHP_EOL;

echo '3. replace StartKitTest.php';     $filename = 'tests/StartKitTest.php';

$startKitTest = \file_get_contents($filename);
$startKitTest = \preg_replace('/App(\\\StartKit)/m', $namespace . '\\StartKit', $startKitTest);
\file_put_contents($filename, $startKitTest);
echo ' > done' . PHP_EOL;

echo '4. composer install' . PHP_EOL;   $command = 'composer install';

if ($isWindow) {
    \popen($command, 'r');
} else {
    \shell_exec($command);
}
echo 'composer installed' . PHP_EOL . PHP_EOL;

echo '5. enjoy TDD' . PHP_EOL;          $command = 'phpunit';

if ($isWindow) {
    \popen($command, 'r');
} else {
    \shell_exec($command);
}
