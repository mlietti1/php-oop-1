<?php

class Movie
{
  public $title;
  public $year;
  public $minutes;
  public $poster = 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png';
  public $director;
  public $genres = [];

  /**
   * @param String $title
   * @param Number $year
   * @param Number $minutes
   * @param String $director
   * @param Array $genres
   */


  public function __construct($_title, $_year, $_minutes, $_director)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->minutes = $_minutes;
    $this->director = $_director;
  }

  public function setPoster($_poster)
  {
    $this->poster = $_poster;
  }
}
