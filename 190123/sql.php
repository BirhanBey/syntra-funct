<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'rootpass';
$db_db = 'moviesdb';
$db_port = 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);

if ($mysqli->connect_error) {
    echo 'Errno: ' . $mysqli->connect_errno;
    echo '<br>';
    echo 'Error: ' . $mysqli->connect_error;
    exit();
}

$name = "You Will Meet a Tall Dark Stranger";
$score = 1;

$sql = "SELECT * FROM movies WHERE name = ? AND score > ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("si", $name, $score);
$stmt->execute();
$rows = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

print "<pre>";
var_dump($rows);
