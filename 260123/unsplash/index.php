<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// require('options.env.php');
require('includes/db.inc.php');
require('includes/unsplash.inc.php');

$unsplashphotos = getUnsplashPhotos();

print '<pre>';
var_dump($unsplashphotos);
