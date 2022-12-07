<?php
include_once './Model/Movie.php';

include_once './movies.php';

var_dump($moviesList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <link rel="stylesheet" href="./css/style.css">
  <title>OOP Movies</title>
</head>

<body>
  <div class="container justify-content-center align-items-center w-100">
    <div class="row row-cols-sm-2 row-cols-xl-4">
      <div class="col movie">
        <div class="content">
          <img src="" alt="">
          <h3></h3>

        </div>
      </div>
    </div>
  </div>
</body>

</html>