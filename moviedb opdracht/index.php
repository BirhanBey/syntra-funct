<?php
error_reporting(0);
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'rootpass';
$db_db = 'moviesdb';
$db_port = 3306;

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port
);

if ($mysqli->connect_error) {
    echo 'Errno: ' . $mysqli->connect_errno;
    echo '<br>';
    echo 'Error: ' . $mysqli->connect_error;
    exit();
}

$sql = "SELECT * FROM movies order by id desc";
$result = $mysqli->query($sql);

$movies = [];
if ($result && $result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $movies[] = $row;
    }
}

?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>

<body>
    <div class="movies m-5">
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Movie Name</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Score</th>
                    <th scope="col">Rotten_Tomatos_Score</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $counter = 1;
                foreach ($movies as $key => $movie) {
                ?>

                    <tr>
                        <td><?= $counter; ?></td>
                        <td><?= $movie["name"]; ?></td>
                        <td><?= $movie["genre"]; ?></td>
                        <td><?= $movie["studio"]; ?></td>
                        <td><?= $movie["score"]; ?></td>
                        <td><?= $movie["rotten_tomatoes_score"]; ?></td>
                        <td><?= $movie["Year"]; ?></td>

                    </tr>

                <?php
                    $counter++;
                }
                ?>

            </tbody>
        </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="http://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $('#myTable').DataTable();
</script>

</html>