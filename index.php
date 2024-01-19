<?php

// This is my CONTROLLER!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require auto-load file
require_once('vendor/autoload.php');

// Instantiate Fat-Free Framework basecall
$f3 = Base::instance();
//$Base f3 = new base (java);
//echo "test1";
// Define a default route
$f3->route('GET /', function() {
    echo "<h1>Pet Home</h1>";
});

$f3->run();