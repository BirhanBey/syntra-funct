<?php 

session_start();


if(is_null($_SESSION['dil'])){    
    $_SESSION['dil'] = "tr";
}else {
    if($_GET['dil']){
        $_SESSION['dil'] = $_GET['dil'];
    }else {        
        $_SESSION['dil'] = "tr";
    }
}
//Dit zijn mijn variablene...
#Dit zijn mijn variablene...
/*Dit zijn mijn variablene...*/
    $voornaam ="Birhan";
    $achternaam = "Yorukoglu";
    $getal1 = 5;
    $getal2 = 7;
    // $sum = $voornaam + $getal; => this gives error
    $sum2 = $getal + $getal2;
    $getal3 = $getal1 + 1;
    $getal3 =  $getal3 + 1;
    $getal3 += 3;
    $getal++;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Birhan</h1>
         <p>Yorukoglu</p> -->
   <?php 
      echo "<h2>" .ucfirst($achternaam)."</h2>";
      echo "<h1>$voornaam</h1>" ;
      echo "<p>$achternaam</p>";
      echo '<p>$achternaam</p>';
      echo '<p>'. $achternaam .'</p>';
      echo "<h2>Hallo " . $voornaam ." ".$achternaam.",</h2>";
      echo "<p>" .$getal1 + $getal2 ."</p>";
      echo "<h1>" .$getal1 + $getal2 ."</h1>";
      echo "<h3>" . $getal3 . "</h3>";
        

       $ar = Array (
        "tr" => [
            "title" => "Türkça",
            "name" => "Birhan",
            "surname" => "Yorukoglu",
            "ageOf" => [
               "day" => "16",
               "month" => "06",
               "years" => "1989"
            ]
        ],
        "en" => [
            "title" => "English",
            "name" => "Birhan",
            "surname" => "Yorukoglu",
            "ageOf" => [
               "day" => "16",
               "month" => "06",
               "years" => "1989"
            ]
        ],
        "nl" => [
            "title" => "Belçika",
            "name" => "Birhan",
            "surname" => "Yorukoglu",
            "ageOf" => [
               "day" => "16",
               "month" => "06",
               "years" => "1989"
            ]
        ],
       );


       print_r($ar[$_SESSION['dil']]);
echo '<br>';
       print_r($_SESSION);
    ?>
    <a href="?dil=tr">TR</a>
    <a href="?dil=en">EN</a>
    <a href="?dil=nl">NL</a>
</body>
</html>