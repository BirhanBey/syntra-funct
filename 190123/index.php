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

?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>

<body>
    <div class="movies">
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

                if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                    $page_no = $_GET['page_no'];
                } else {
                    $page_no = 1;
                }

                $total_records_per_page = 10;
                $offset = ($page_no - 1) * $total_records_per_page;
                $previous_page = $page_no - 1;
                $next_page = $page_no + 1;
                $adjacents = "2";



                $result_count = $mysqli->query("SELECT COUNT(*) As total_records FROM movies");
                $total_records = mysqli_fetch_array($result_count);
                $total_records = $total_records['total_records'];
                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                $second_last = $total_no_of_pages - 1; // total page minus 1
                $sql = "SELECT * FROM movies LIMIT $offset, $total_records_per_page";
                $result = $mysqli->query($sql);

                $counter = 0;
                while ($movie = mysqli_fetch_array($result)) {
                    $counter++;
                    echo "<tr>
                        <td>" . $counter . "</td>
                        <td>" . $movie["name"] . "</td>
                        <td>" . $movie["genre"] . "</td>
                        <td>" . $movie["studio"] . "</td>
                        <td>" . $movie["score"] . "</td>
                        <td>" . $movie["rotten_tomatoes_score"] . "</td>
                        <td>" . $movie["Year"] . "</td>
                    </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
    <ul class="pagination">

        <li <?php if ($page_no <= 1) {
                echo "class='disabled'";
            } ?>>
            <a <?php if ($page_no > 1) {
                    echo "href='?page_no=$previous_page'";
                } ?>>Previous</a>
        </li>

        <?php
        if ($total_no_of_pages <= 10) {
            for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
                if ($counter == $page_no) {
                    echo "<li class='active'><a>$counter</a></li>";
                } else {
                    echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
            }
        } elseif ($total_no_of_pages > 10) {

            if ($page_no <= 4) {
                for ($counter = 1; $counter < 8; $counter++) {
                    if ($counter == $page_no) {
                        echo "<li class='active'><a>$counter</a></li>";
                    } else {
                        echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                    }
                }
                echo "<li><a>...</a></li>";
                echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
            } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                echo "<li><a href='?page_no=1'>1</a></li>";
                echo "<li><a href='?page_no=2'>2</a></li>";
                echo "<li><a>...</a></li>";
                for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                    if ($counter == $page_no) {
                        echo "<li class='active'><a>$counter</a></li>";
                    } else {
                        echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                    }
                }
                echo "<li><a>...</a></li>";
                echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
            } else {
                echo "<li><a href='?page_no=1'>1</a></li>";
                echo "<li><a href='?page_no=2'>2</a></li>";
                echo "<li><a>...</a></li>";

                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                    if ($counter == $page_no) {
                        echo "<li class='active'><a>$counter</a></li>";
                    } else {
                        echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                    }
                }
            }
        }
        ?>

        <li <?php if ($page_no >= $total_no_of_pages) {
                echo "class='disabled'";
            } ?>>
            <a <?php if ($page_no < $total_no_of_pages) {
                    echo "href='?page_no=$next_page'";
                } ?>>Next</a>
        </li>
        <?php if ($page_no < $total_no_of_pages) {
            echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
        } ?>
    </ul>

</body>


</html>