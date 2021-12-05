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
    $this->setMovieTitle($_movieData["title"]);
    $this->setMovieCompany($_movieData["company"]);
    $this->setMovieRating($_movieData["rating"]);
    $this->setMovieCast($_movieData["cast"]);
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

  public function setMovieTitle($title)
  {
    $this->movieData["title"] = $title;
  }
  public function setMovieCompany($company)
  {
    $this->movieData["company"] = $company;
  }
  public function setMovieRating($rating)
  {
    $this->movieData["rating"] = $rating;
  }
  public function setMovieCast($cast)
  {
    $this->movieData["cast"] = $cast;
  }
}
