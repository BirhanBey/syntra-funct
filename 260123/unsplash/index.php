<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// require('options.env.php');
require('includes/db.inc.php');
require('includes/unsplash.inc.php');


$unsplashphotos = getUnsplashPhotos();

// $photos = [];

foreach ($unsplashphotos->results as $photoObj) {
    $photos[] = [
        'unsplash_id' => $photoObj->id,
        'url' => $photoObj->urls->full
    ];

    insertPhoto($photoObj->id, $photoObj->urls->full);
    
}


print '<pre>';
// print_r($unsplashphotos);
print_r($photos);



$dbphotos = getDbPhotos();

print '<pre>';
print_r($dbphotos);
