<?php
require("data.php");
$id = 0;
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
};

$movie = $movies[0];
if(isset($movies[$id])) {
    $movie = $movies[$id];
}
?>

<html>

<body>
    <div>
        <img src="<?php echo $movies[$id][2]; ?>" width="300" alt="">
    </div>
    <h1><?php echo $movies[$id][0]; ?></h1>
    <h7><?php echo $movies[$id][1]; ?></h7>
</body>

</html>