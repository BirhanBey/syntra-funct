<?php 
// echo ucfirst("dit is een tekst"); /**ilk harfi büyük yapmak için */

// ____________________________________________________________________________________

// function berekenSom ($a, $b){
//     return ($a+$b);
// }
// echo "som van 5 + 3 is " . berekenSom(5, 3) . "<br />"; /**toplama yapmak için */
// echo berekenSom(10,1); /**toplama yapmak için */

// _____________________________________________________________________________________

// 
// function doeIets ($a){
//     $a = strtoupper($a);
//     $a = $a . " - ik heb iets gedaan..." . "<br />";
//     return $a;
// }

// echo doeIets("dit is mijn tekst");

// _____________________________________________________________________________________

// $teller = 0;
// function addOne($a){
//     $a = $a +1;
//     $extra = "dit is een tekst die gemaakt wordt in functie addOne";
//     return $a;
// };

// echo addOne($teller) . "<br />";
// echo addOne($teller) . "<br />";
// echo $extra;

// _____________________________________________________________________________________

// function showFutureTime($xtra_time){
//    $current_time = time() + (6*60*60);
//    $str = date("d/m/Y - H\ui\ms\s", $current_time);
//    return $str;
// };

// echo showFutureTime($xtra_time); /*** ==>şu anki saatten altı saat ilerinisini göstermek için */


// _____________________________________________________________________________________

// function showFutureTime($extra_time){
//    $current_time = strtotime("+6 hours");
//    $str = date("d/m/Y - H\ui\ms\s", $current_time);
//    return $str;
// };

// echo showFutureTime(); /*** ==> bu da şu anki saatten altı saat ilerinisini göstermek için */


// _____________________________________________________________________________________

// function showFutureTime($extra_time = 0){
//     $current_time = time() + $extra_time;
//     $str = date("d/m/Y - H\ui\ms\s", $current_time);
//     return $str;
//  };
 
//  echo showFutureTime(48800);

// _____________________________________________________________________________________

// date_default_timezone_set("Europe/Brussels");

// $seconden = $_GET["s"];

// function showFutureTime($extra_time = 0){
//     $current_time = time() + $extra_time;
//     $str = date("d/m/Y - H\ui\ms\s", $current_time);
//     return $str;
//  };
 
//  echo showFutureTime($seconden);


?>

