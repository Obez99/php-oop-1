<?php

require_once "data/movies.php";
require "classes/Movie.php";

foreach ($movies as $movie) {
  $currentMovie = new Movie($movie);
  echo ($currentMovie->getMovieTitle());
}
