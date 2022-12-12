<?php
$errors = [];
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errors[] = "Only letters and white space allowed";
    }
}
if (!empty($_POST['mail'])) {
    $mail = $_POST['mail'];
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
}
print '<pre>';
var_dump($errors);
print '</pre>';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nieuwsbrief formulier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-warning p-5" style="margin: 100px auto; width: 800px; border-radius: 10px;">
        <h1>Nieuwsbrieven</h1>
        <?php
        if (count($errors) > 0) {
            echo "<div class=\"alert alert-danger\" role=\"alert\"><ul>";
            foreach ($errors as $error) {
                print "<li>$error</li>";
            }
            echo "</ul></div>";
        }
        ?>
        <form method="post" action="index.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" value="<?php echo (1 < 2 ? 'ja' : 'nee') ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Naam</label>
                <input type="text" class="form-control" id="exampleInputName" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>