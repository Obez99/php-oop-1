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
    if (!array_key_exists("title", $_movieData)) {
      $this->movieData["title"] = "Nessun titolo.";
    } else
      $this->movieData["title"] = $_movieData["title"];

    if (!array_key_exists("company", $_movieData)) {
      $this->movieData["company"] = "Nessuna casa produttrice.";
    } else
      $this->movieData["company"] = $_movieData["company"];

    if (!array_key_exists("rating", $_movieData)) {
      $this->movieData["rating"] = "Nessun voto.";
    } else
      $this->movieData["rating"] = $_movieData["rating"];

    if (!array_key_exists("cast", $_movieData)) {
      $this->movieData["cast"] = "Nessun cast.";
    } else
      $this->movieData["cast"] = $_movieData["cast"];
  }

  public function getMovieTitle()
  {
    return $this->movieData["title"];
  }
  public function getMovieCompany()
  {
    return $this->movieData["company"];
  }
  public function getMovieRating()
  {
    return $this->movieData["title"];
  }
  public function getMovieCast()
  {
    return $this->movieData["cast"];
  }
}
