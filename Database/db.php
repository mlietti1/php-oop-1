<?php

// models
require_once __DIR__ . '/../Models/Genre.php';
require_once __DIR__ . '/../Models/Movie.php';

$genres_film1 = [
  new Genre('Fantasy'),
  new Genre('Family')
];
$genres_film2 = [
  new Genre('Romance'),
  new Genre('Comedy')
];

$movies = [


  new Movie('A Christmas Carol', 2009, 96, 'Robert Zemeckis', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjDq_SCsBkDdS6wLoGuaCbPLJt-an53zmZw7z-1PU6to_ngQaB', $genres_film1),

  new Movie('The Holiday', 2006, 136, 'Nancy Meyers', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRlx0kTv-iCvnzjh4nSnEkVFDYQtJcf8jM0RzrU1omHs8Gezfna', $genres_film2),

  new Movie('How the Grinch Stole Christmas', 2000, 105, 'Ron Howard', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ-6Yk0SOM-ZrhLTfc14Cesqc6sP7fjDzRiB2ytx-BhlImPPyCN', $genres_film1),

  new Movie('Love Hard', 2021, 105, 'Hernán Jiménez', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcROsrBcuSOJAmZlZL7DyMefMKiKDpKTYVSp0R_mlyKXnq9HoD92', $genres_film2),


];
