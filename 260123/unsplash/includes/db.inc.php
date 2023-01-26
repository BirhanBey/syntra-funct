<?php
error_reporting(1);
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'rootpass';
$db_db = 'functional_programming_php';
$db_port = 3306;

try {
    $pdo = new PDO('mysql:host=' . $db_host . '; port=' . $db_port . '; dbname=' . $db_db, $db_user, $db_password);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}



function getDbPhotos()
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM `230126_photos` ORDER BY ID DESC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertPhoto($unsplash_id, $url)
{
    global $pdo;

    $sql = "INSERT IGNORE INTO 230126_photos 
    SET unsplash_id = :unsplash_id,
    url = :url";
    $stmt = $pdo->prepare($sql);

    $data = [
        "unsplash_id" => $unsplash_id,
        'url' => $url,
    ];

    $stmt->execute($data);
}
