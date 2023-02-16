
<?php
date_default_timezone_set('Europe/Brussels');

// functies
// --------
// - palindroom?

// - zit woord in zin?

// - zitten we op http of https?

// - 1-2-3-4-5-6-7-8-9-10

// - priemgetal?

function getLengteSchuineZijde($a, $b)
{


    return sqrt(($a * $a) + ($b * $b));

    return sqrt(pow($a, 2) + pow($a, 2));

    return sqrt($a ** 2 + $b ** 2);
}


// - som van alle cijfers van een gegeven (geheel) getal?
// - 826239 => 8+2+6+2+3+9 => 30

// - Aftellen tot verjaardag

function aftellen_tot_eindeOpleiding($birthday)
{
    $currentDate = "27/01/2023"; //Opgelost
    $currentDate = date("Y/m/d");
    return ($birthday - $currentDate); //Klaar
}


// date()



// showTree($n) ->
// *
// * *
// * * *
// * *
// *

// - Maak een dambord van n rijen/kolommen:
// x 0 x 0 x 0 x 0
// 0 x 0 x 0 x 0 x
// x 0 x 0 x 0 x 0
// 0 x 0 x 0 x 0 x
// x 0 x 0 x 0 x 0
// 0 x 0 x 0 x 0 x
// x 0 x 0 x 0 x 0
// 0 x 0 x 0 x 0 x


function input($num)
{
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo '<br/>';
    }
    for ($i = 0; $i < $num - 1; $i++) {
        echo "*";
    }
    echo "A* <br/>";
    for ($i = $num; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo '<br/>';
    }
}

echo input(5);


function daysUntilBirthday($birthdate, $currentdate)
{
    $birthTimestamp = strtotime($birthdate);
    $currentTimestamp = strtotime($currentdate);
    $nextBirthTimestamp = strtotime('+1 year', $birthTimestamp);

    if ($nextBirthTimestamp < $currentTimestamp) {
        $nextBirthTimestamp = strtotime('+1 year', $nextBirthTimestamp);
    }

    $secondsUntilBirthday = $nextBirthTimestamp - $currentTimestamp;

    return floor($secondsUntilBirthday / 86400);
}

$birthdate = '2000-01-01';
$currentdate = '2022-12-31';

echo daysUntilBirthday("1989-06-16", "2023-01-27");
?>