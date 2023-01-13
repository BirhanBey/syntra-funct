<?php
require('function.php');

$id = 10;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$characters = getAPI("https://api.disneyapi.dev/characters");
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cocktails...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script src="index.js" defer></script>
</head>

<body>
    <div class="slideshow-container">
        <div class="row ">
            <?php foreach ($characters->data as $character) { ?>
                <div class="mySlides">
                    <div class="card">
                        <img src="<?= $character->imageUrl ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $character->name ?></h5>
                            <a href="character.php?id=<?= $character->_id ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- <div class="infos">
        <div class="info">
            <p><?= $character->_id ?></p>
            <p><?= $character->films ?></p>
            <p><?= $character->name ?></p>
            <p><?= $character->shortFilms ?></p>
            <p><?= $character->tvShows ?></p>
            <p><?= $character->videoGames ?></p>
        </div>
    </div> -->

</body>

</html>