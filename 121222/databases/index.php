<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'php-test';
$db_port = 8889;

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

echo 'Success: A proper connection to MySQL was made.';
echo '<br>';
echo 'Host information: ' . $mysqli->host_info;
echo '<br>';
echo 'Protocol version: ' . $mysqli->protocol_version;

$mysqli->close();
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Land</th>
                    <th scope="col">Aantal inwoners</th>
                    <th scope="col">Oppervlakte</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                foreach ($users as $key => $person) {
                ?>

                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $country[0] ?></td>
                        <td><?php echo $person[1] ?></td>
                        <td><?php echo $person[2] ?></td>
                    </tr>

                <?php
                    $counter++;
                }
                ?>



            </tbody>
        </table>
    </div>
</body>

</html>