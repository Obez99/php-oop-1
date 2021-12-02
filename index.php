<?php

require_once "data/movies.php";
require "classes/Movie.php";

$film = new Movie($movies[0]);
var_dump($film);
