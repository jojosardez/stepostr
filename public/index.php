<?php

define ('SITE_ROOT', realpath(dirname(__FILE__)));

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false;
    }
}

session_start();

// Instantiate the app
$app = require __DIR__ . '/../src/bootstrap.php';

// Run app
$app->run();
