<?php 
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'rootpass';
$db_db = 'watergroup';
$db_port = 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port
);
