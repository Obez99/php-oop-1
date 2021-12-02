<?php

class Movie
{
  public $movieData = [
    "title" => "",
    "company" => "",
    "rating" => null,
    "cast" => []
  ];

  function __construct($_movieData)
  {
    $this->movieData["title"] = $_movieData["title"];
    $this->movieData["company"] = $_movieData["company"];
    $this->movieData["rating"] = $_movieData["rating"];
    $this->movieData["cast"] = $_movieData["cast"];
  }
  public function getMovieTitle()
  {
    return $this->movieData["title"];
  }
}
