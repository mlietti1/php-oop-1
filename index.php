<?php
include_once './Models/Movie.php';

include_once './Database/db.php';


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
    <div class="row my-5">
      <h3 class="mb-5">Movies</h3>
      <?php foreach ($movies as $movie) : ?>
        <div class="col-3">
          <div class="card">
            <img src="<?php echo $movie->poster ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $movie->title ?></h5>
              <p class="card-text"><?php echo $movie->year ?></p>
              <p class="card-text">Durata: <?php echo $movie->minutes ?></p>

            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>