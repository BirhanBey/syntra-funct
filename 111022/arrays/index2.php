<?php
// $txt = "this is a text";
// $num = 123;
// var_dump($txt);
// echo "<br />";
// var_dump($num);

$fruits = ["kiwi", "apple", "banana"];
$fruits[3] = "mango";
$fruits[1] = "peer";
$fruits[4] = 5;


echo "<pre>";
// var_dump($fruits);
print_r($fruits);
echo "</pre>";

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo "<br />";
}

foreach ($fruits as $key => $value) {
    echo "$value($key)";
    echo "<br/>";
}
?>
