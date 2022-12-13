<?php

class Movie
{
  public $title;
  public $year;
  public $minutes;
  public $poster = 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png';
  public $director;
  public $genres;

  /**
   * @param String $title
   * @param Number $year
   * @param Number $minutes
   * @param String $director
   * @param Array $genres
   */


  public function __construct($_title, $_year, $_minutes, $_director, $_poster, $_genres)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->minutes = $_minutes;
    $this->director = $_director;
    $this->poster = $_poster;
    $this->genres = $_genres;
  }

  public function get_movie_details()
  {
    return "Film: $this->title, Durata: $this->duration minuti";
  }
}


// eliminare il json e passare i dati creando new movie nell'index

// creo class genre, ogni genere così è una classe