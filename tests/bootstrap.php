<?php

namespace DiasporaApi\Tests;

$autoloader = __DIR__ . '/../vendor/autoload.php';

// Check that --dev composer installation was done.
if (!file_exists($autoloader)) {
    throw new \Exception(
        'Please run "php composer.phar install --dev" in root directory ' .
        'to setup unit test dependencies before running the tests!'
    );
}

// Include the Composer autoloader.
require_once $autoloader;

// Unset global variables that are no longer needed.
unset($autoloader);
