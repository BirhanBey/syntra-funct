<?php

error_reporting(0);

require "includes/db.inc.php";
require "includes/functions.inc.php";

$movies = getMovies();
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
    //Check if the form is submitted
    if (isset($_POST)) {
      // If the POST request is for deleting a movie
      if ($_POST['type'] == "delete") {
        // Select the movie to be deleted from the database using its id
        $stmt = $pdo->query("SELECT * FROM 230302_movies WHERE id = '" . $_POST['id'] . "'")->fetch(PDO::FETCH_ASSOC);
    ?>
        <div class="row">
          <div class="col-12 col-md-5 mx-auto">
            <form method="post" class="d-flex flex-column justify-content-center aling-items-center my-4">
              <h2 class="text-center"><b><?php echo $stmt['name']; ?></b><br /> Do you really want to delete this film?</h2>
              <input hidden name="id" value="<?php echo $_POST['id']; ?>">
              <input hidden name="type" value="confirmDel">
              <button type="submit" class="btn btn-danger">Delete Confirm</button>
            </form>
          </div>
        </div>
    <?php
      }
      // If the POST request is for confirming the deletion of a movie
      else if ($_POST['type'] == "confirmDel") {
        // Update the published column of the movie to 0 to mark it as deleted
        $stmt =  $pdo->exec("UPDATE 230302_movies SET published='0'  WHERE id='" . $_POST['id'] . "'");
        // Display a success or error message to the user
        if ($stmt) {
          echo '<div class="row"><div class="col-12 col-md-5 mx-auto my-4"><div class="alert alert-success">Film deleted</div></div></div>';
        } else {
          echo '<div class="row"><div class="col-12 col-md-5 mx-auto my-4"><div class="alert alert-danger">Film could not delete</div></div></div>';
        }
      }
      // If the POST request is for editing a movie
      else if ($_POST['type'] == "editConfirm") {
        // Update the movie information in the database using its id
        $upsql = $pdo->exec("UPDATE 230302_movies SET 
             name='" . $_POST['name'] . "', 
             studio='" . $_POST['studio'] . "', 
             genre='" . $_POST['genre'] . "', 
             score='" . $_POST['score'] . "', 
             year='" . $_POST['year'] . "' WHERE id='" . $_POST['id'] . "'");
        // Display a success or error message to the user
        if ($upsql) {
          echo '<div class="row"><div class="col-12 col-md-5 mx-auto my-4"><div class="alert alert-success">Your changes to ' . $_POST['name'] . ' are saved</div></div></div>';
        } else {
          echo '<div class="row"><div class="col-12 col-md-5 mx-auto my-4"><div class="alert alert-danger">Your changes to ' . $_POST['name'] . ' are not saved</div></div></div>';
        }
      }
    }
    ?>
    <!-- Display the list of movies -->
    <div class="d-flex">
      <h1 class="mx-auto">Movies Ranking</h1>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>

          <th></th>
          <th scope="col"><a href="?order=name">Name</a></th>
          <th scope="col"><a href="?order=genre">Genre</a></th>
          <th scope="col"><a href="?order=studio">Studio</a></th>
          <th scope="col"><a href="?order=year">Year</a></th>
          <th scope="col"><a href="?order=score">Score</a></th>
          <th></th>
        </tr>
      </thead>


      <tbody>
        <?php foreach ($movies as $key => $movie) { ?>
          <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $movie->name ?></td>
            <td><?= $movie->genre ?></td>
            <td><?= $movie->studio ?></td>
            <td><?= $movie->year ?></td>
            <td><?= $movie->score ?></td>
            <td>

              <div class="d-flex flex-row gap-3 justify-content-center align-items-center">
                <a href="edit.php?id=<?php echo $movie->id; ?>" class="btn btn-warning">edit</a>

                <form method="post">
                  <input hidden name="id" value="<?php echo $movie->id; ?>">
                  <input hidden name="type" value="delete">
                  <button type="submit" class="btn btn-danger">delete</button>
                </form>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>

    </table>

  </div>
</body>

</html>