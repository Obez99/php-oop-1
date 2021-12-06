<?php

class Movie
{
  public $movieData = [
    "title" => "Titolo",
    "originalTitle" => "Original Title",
    "company" => "Casa produttrice",
    "rating" => null,
    "cast" => []
  ];

  function __construct($_movieData)
  {
    if (array_key_exists("title", $_movieData)) {
      $this->setMovieTitle($_movieData["title"]);
    }
    if (array_key_exists("company", $_movieData)) {
      $this->setMovieCompany($_movieData["company"]);
    }
    if (array_key_exists("rating", $_movieData)) {
      $this->setMovieRating($_movieData["rating"]);
    }
    if (array_key_exists("cast", $_movieData)) {
      $this->setMovieCast($_movieData["cast"]);
    }
    if (array_key_exists("originalTitle", $_movieData)) {
      $this->setMovieOriginalTitle($_movieData["originalTitle"]);
    }
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
    return $this->movieData["rating"];
  }
  public function getMovieCast()
  {
    return $this->movieData["cast"];
  }

  public function setMovieTitle($title)
  {
    if ($this->isInvalid($title)) {
      return;
    }
    $this->movieData["title"] = $title;
  }

  public function setMovieCompany($company)
  {
    if ($this->isInvalid($company)) {
      return;
    }
    $this->movieData["company"] = $company;
  }

  public function setMovieRating($rating)
  {
    if ($this->isInvalid($rating)) {
      return;
    }
    $this->movieData["rating"] = $rating;
  }
  public function setMovieOriginalTitle($originalTitle)
  {
    if ($this->isInvalid($originalTitle)) {
      return;
    }
    $this->movieData["originalTitle"] = $originalTitle;
  }

  public function setMovieCast($cast)
  {
    foreach ($cast as $actor) {
      $actorToPush = [
        "name" => "",
        "surname" => "",
        "age" => 0
      ];

      if (array_key_exists("name", $actor)) {
        if ($this->isInvalid($actor["name"])) {
          $actorToPush["name"] = "NoName";
        } else {
          $actorToPush["name"] = $actor["name"];
        }
      } else {
        $actorToPush["name"] = "NoName";
      }

      if (array_key_exists("surname", $actor)) {
        if ($this->isInvalid($actor["surname"])) {
          $actorToPush["surname"] = "NoName";
        } else {
          $actorToPush["surname"] = $actor["surname"];
        }
      } else {
        $actorToPush["surname"] = "NoName";
      }

      if (array_key_exists("age", $actor)) {
        if ($this->isInvalid($actor["age"])) {
          $actorToPush["age"] = "NoName";
        } else {
          $actorToPush["age"] = $actor["age"];
        }
      } else {
        $actorToPush["age"] = "NoName";
      }



      array_push($this->movieData["cast"], $actorToPush);
    }
  }

  public function isInvalid($value)
  {
    if (!isset($value) || is_null($value) || empty($value))
      return true;
  }

  public function getTranslatedTitle()
  {
    return $this->movieData["originalTitle"];
  }
}
