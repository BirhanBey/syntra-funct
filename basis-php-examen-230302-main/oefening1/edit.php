<?php
error_reporting(0);

require "includes/db.inc.php";
// Retrieve movie information from database using GET parameter
if (!is_null($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM 230302_movies WHERE id = '" . $_GET['id'] . "'")->fetch(PDO::FETCH_ASSOC);
} else {
    // Redirect to homepage if movie ID is not specified
    header('Location: "index.php"');
}
// Define an array of available movie genres
$genres = [
    "Romance",
    "Comedy",
    "Drama",
    "Animation",
    "Fantasy",
    "Action",
    "SciFi",
    "Horror"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Ranking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php
        // Check if the form has been submitted
        if (isset($_POST)) {
            // Check if the form action is 'edit'
            if ($_POST['type'] == "edit") {
                // Fetch the movie details again using the 'id' parameter
                $editsql = $pdo->query("SELECT * FROM 230302_movies WHERE id = '" . $_GET['id'] . "'")->fetch(PDO::FETCH_ASSOC);
        ?>
                <!-- Display movie information for editing confirmation -->
                <div class="row">
                    <div class="col-12 col-md-5 mx-auto">
                        <form method="post" action="index.php" class="d-flex flex-column justify-content-center aling-items-center my-4">
                            <h2 class="text-center"><b><?php echo $editsql['name']; ?></b><br /> Do you sure to want to editing this film! </h2>
                            <input hidden name="id" value="<?php echo $editsql['id']; ?>">
                            <input hidden name="type" value="editConfirm">
                            <input hidden name="name" value="<?php echo $_POST['title']; ?>">
                            <input hidden name="studio" value="<?php echo $_POST['studio']; ?>">
                            <input hidden name="genre" value="<?php echo $_POST['movieType']; ?>">
                            <input hidden name="score" value="<?php echo $_POST['score']; ?>">
                            <input hidden name="year" value="<?php echo $_POST['year']; ?>">
                            <button type="submit" class="btn btn-warning">Update Confirm</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <!-- Display movie editing form -->
        <div class="col-12 col-md-5 mx-auto my-4">
            <h4>You are updating the <?php echo $stmt['name']; ?> named film!</h4>
            <form method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="title" value="<?php echo $stmt['name']; ?>" placeholder="Enter the movie's name">
                    <label for="name">Movie's name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="studio" name="studio" value="<?php echo $stmt['studio']; ?>" placeholder="Enter studio name">
                    <label for="studio">Studio name</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-control" id="movieType" name="movieType" placeholder="Select Genre">
                        <option>Please select genre</option>
                        <!-- call the genre list from array -->
                        <?php
                        foreach ($genres as $genre) {
                            if ($stmt['genre'] == $genre) {
                                echo '<option value="' . $genre . '" selected>' . $genre . '</option>';
                            }
                            echo '<option value="' . $genre . '">' . $genre . '</option>';
                        }
                        ?>
                    </select>
                    <label for="movieType">Select Genre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" min='0' max='100' class="form-control" id="score" name="score" value="<?php echo $stmt['score']; ?>" placeholder="Enter the score">
                    <label for="score">Edit the score</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" min='1900' max='<?php echo date('Y'); ?>' class="form-control" id="year" name="year" value="<?php echo $stmt['year']; ?>" placeholder="Edit the Year">
                    <label for="year">Edit the Year</label>
                </div>
                <input hidden name="type" value="edit">
                <button type="submit" class="btn btn-success">Edit Movie</button>
            </form>
        </div>
    </div>
</body>

</html>