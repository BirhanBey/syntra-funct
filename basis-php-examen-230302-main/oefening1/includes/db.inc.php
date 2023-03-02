<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'rootpass';
$db_db = '230302_movie';
$db_port = 3306;

try {
  $pdo = new PDO('mysql:host=' . $db_host . '; port=' . $db_port . '; dbname=' . $db_db, $db_user, $db_password);
} catch (PDOException $e) {
  echo "Error!: " . $e->getMessage() . "<br/>";
  die();
}
