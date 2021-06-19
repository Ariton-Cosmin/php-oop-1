<?php 

  require_once __DIR__ . '/classes/Movie.php'

  $movie = new Movie("Ritorno al futuro");
  $movie->setGenres('dio|bwnefw|hvuh');
  $movie->setCast('ciao|miao|bao');
  $movie->overview = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, nostrum velit beatae earum vitae est in magnam ipsa placeat ratione, excepturi minima sapiente odit similique possimus et provident dolores! Laborum.";
  $movie->setVote(4);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <div class="container">
    <h1>Film</h1>
    <div class="row">
      <div class="col">
        Titolo: <?php echo $mo0vie1->getTitle() ?>
      </div>
      <div class="col">

        Generi: 
        <ul>
          <?php foreach($movie1->getGenres() as $genre) : ?>
            <li> <?php echo $genre ?> </li>
          <?php endforeach; ?>
        </ul>

        Cast:
        <ul>
          <?php foreach($movie1->getCast() as $cast) : ?>
            <li> <?php echo $cast ?> </li>
          <?php endforeach; ?>
        </ul>

        <p> Trama: <?php echo $movie1->overview ?> </p>

        <p> Voto: <?php echo $movie1->getVote() ?> </p>

      </div>
    </div>
  </div>

</body>
</html>