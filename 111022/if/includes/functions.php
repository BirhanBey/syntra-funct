<?php
date_default_timezone_set("Europe/Brussels");

function getHello($firstname, $name, $sex = "x")
{
    $hour = (int)date("H");

    $firstname = ucfirst(strtolower($firstname));
    $name = ucfirst(strtolower($name));


    // gereeting
    $hello = "Goede Avond";
    if ($hour <= 6) {
        $hello = "Goeienacht";
    } elseif ($hour <= 11) {
        $hello = "Goeiemorgen";
    } elseif ($hour <= 17) {
        $hello = "Dag";
    }

    // title
    // $sex == "";
    // if ($sex == "m") {
    //     $title = "meneer";
    // } elseif ($sex == "f") {
    //     $title = "mevrouw";
    // }
    switch ($sex) {
        case 'f':
            $title = "mevrouw";
            # code...
            break;
        case 'm':
            $title = "meneer";
            # code...
            break;
        default:
            $title = "";
            # code...
            break;
    }
    return "$hello $title $name,";
}
