<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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

// Haal het totaal cijfer op
$sql = "SELECT COUNT(ID) AS total FROM movies";
$result = $mysqli->query($sql)->fetch_assoc();
$total = $result["total"];

// Get page ophalen
$page = 1;
if (isset($_GET["page"])) {
    $page = (int) $_GET["page"];
    if ($page == 0) {
        $page = 1;
    }
}

$direction = 'ASC';
$directions = [
    'up' => 'ASC',
    'down' => 'DESC'
];

if (isset($_GET["direction"])) {
    $_GET["direction"] = strtolower($_GET["direction"]);
    if (isset($directions[$_GET["direction"]])) {
        $direction = $directions[$_GET["direction"]];
    }
}

$sort = "name";
$sorts = [
    "name",
    "genre",
    "Year",
    "studio",
    "score"
];

if (isset($_GET["sort"])) {
    if (in_array($_GET["sort"], $sorts)) {
        $sort = $_GET["sort"];
    }
}




// Haal de gevraagde resultaten op
$limit = 10;
$offset = ($page - 1) * $limit;
$sql = "SELECT * FROM movies ORDER BY " . $sort . " " . $direction . " LIMIT " . $offset . ", " . $limit;

$result = $mysqli->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

// Hoeveel pagina's zijn er?
$pages = ceil($total / $limit);

$mysqli->close();
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Movies</h1>
        <p><?= $total; ?> resultaten gevonden.</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"><a href="index.php?sort=name&direction=<?= ($sort == 'name' && $direction == 'ASC' ? 'down' : 'up') ?>">Name</a></th>
                    <th scope="col"><a href="index.php?sort=genre&direction=<?= ($sort == 'genre' && $direction == 'ASC' ? 'down' : 'up') ?>">Genre</a></th>
                    <th scope=" col"><a href="index.php?sort=studio&direction=<?= ($sort == 'studio' && $direction == 'ASC' ? 'down' : 'up') ?>">Studio</a></th>
                    <th scope=" col"><a href="index.php?sort=score&direction=<?= ($sort == 'score' && $direction == 'ASC' ? 'down' : 'up') ?>">Score</a></th>
                    <th scope=" col"><a href="index.php?sort=Year&direction=<?= ($sort == 'Year' && $direction == 'ASC' ? 'down' : 'up') ?>">Year</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1 + $offset;
                foreach ($rows as $key => $row) {
                ?>

                    <tr <?php print($counter % 2 == 0 ? 'style="background-color: lightgray;"' : '') ?>>
                        <td><?= $counter; ?></td>
                        <td><?= $row["name"]; ?></td>
                        <td><?= $row["genre"]; ?></td>
                        <td><?= $row["studio"]; ?></td>
                        <td><?= $row["score"]; ?></td>
                        <td><?= $row["Year"]; ?></td>
                    </tr>

                <?php
                    $counter++;
                }
                ?>



            </tbody>
        </table>
        <div class=" d-flex justify-content-between">
            <?php if ($page !== 1) { ?>
                <a class="page-link" style='text-decoration : none' href='?page=1'>&lsaquo;&lsaquo; First -- </a>
            <?php } ?> <?php if ($page > 1) { ?>
                <a class="page-link" href="index.php?page=<?= $page - 1 ?>&sort=<?= $sort ?>">previous</a>
            <?php } ?>

            <?php
            $minimal_links_to_show = 7;
            if ($minimal_links_to_show > $pages) {
                $minimal_links_to_show = $pages;
            }

            $for_start = $page - floor($minimal_links_to_show / 2);
            if ($for_start < 1) {
                $for_start = 1;
            }
            $overflow = 0;

            $links = [];
            while (count($links) < $minimal_links_to_show) {
                if ($for_start > $pages) {
                    // opletten: geen pages tonen achteraan die niet mogen bestaan, dus voeg een extra page vooraan toe
                    array_unshift($links, ($for_start - count($links) - 1));
                } else {
                    array_push($links, $for_start);
                    $for_start++;
                }
            }

            foreach ($links as $link) {
                print '<a class="page-link" href="index.php?page=' . $link . '&sort=' . $sort . '">' . ($link == $page ? '[' . $link . ']' : $link) . '</a> ';
            }

            ?>

            <?php if ($page < $pages) { ?>
                <a class="page-link" href="index.php?page=<?= $page + 1 ?>&sort=<?= $sort ?>">next</a>
            <?php } ?>
            <?php if ($page != $pages) {
                echo "<a class='page-link' style='text-decoration : none' href='?page=$pages'>-- Last &rsaquo;&rsaquo;</a>";
            } ?>
        </div>

    </div>
</body>

</html>