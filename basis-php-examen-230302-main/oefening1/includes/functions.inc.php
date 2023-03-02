<?php

function getMovies()
{
  global $pdo;
  $sql = "SELECT * FROM 230302_movies WHERE published = 1 ORDER BY score DESC";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  // $pdo = null;
  return $result;
};
