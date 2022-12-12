<?php
$kristof = ["kristof", "grenson", "m"];
$evelien = ["Evelien", "Hofmans", "f"];
$david = ["David", "Verhulst", "m"];
$karim = ["Karim", "Dehbi", "m"];

$users = [$kristof, $evelien, $david, $karim];
$users = array_values($users)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($users); $i++) {
            ?>
                <tr>
                    <td><?php echo $key++; ?></td>
                    <td><?php echo $users[0]; ?></td>
                    <td><?php echo $users[1]; ?></td>
                    <td><?php echo $users[2]; ?></td>
                </tr>
            <?php
            } ?>

        </tbody>
    </table>
</body>

</html>