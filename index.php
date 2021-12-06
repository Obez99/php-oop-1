<?php

require_once "data/movies.php";
require "classes/Movie.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <?php foreach ($movies as $movie) {
    $currentMovie = new Movie($movie); ?>
    <ul>
      <li><b><?php echo $currentMovie->getMovieTitle() ?></b></li>
      <li><?php echo $currentMovie->getTranslatedTitle() ?></li>
      <li><?php echo $currentMovie->getMovieCompany() ?></li>
      <li>Voto: <?php echo $currentMovie->getMovieRating() ?> </li>
      <li>Cast:
        <ul>
          <?php
          foreach ($currentMovie->getMovieCast() as $actor) {
            echo "<li>" . $actor["name"] . " " . $actor["surname"] . " - " . $actor["age"] . " anni" . "</li>";
          }
          ?>
        </ul>
      </li>
    </ul>

  <?php } ?>

</body>

</html>