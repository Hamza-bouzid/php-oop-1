<?php 
require_once __DIR__.'./classes/movie.php';

$movies = [
  new Movie('Matrix','Fantascienza','Inglese','1999'),
  new Movie('Dune','Fantascienza','Inglese','2021'),
  new Movie('In Time','Fantascienza','Inglese','2011'),
  new Movie('Quasi amici','Commedia','Francese','2011'),
  new Movie('La vita è bella','Commedia drammatica','Inglese','1997')
];



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OPP-1</title>
</head>
<body>
  
<div>
  <?php 
    foreach($movies as $movie) {
      echo $movie->movieInfo();
    }
  ?>
</div>
</body>
</html>