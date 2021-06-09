<?php  
  require_once __DIR__ . '/data/db.php';

  $genres = [];
  $albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $database : [];
  //se albums è uguale al genere del get vuoto o al genere del get pieno avrà il valòore di database altrimenti avra il valore di un array vuoto

  
  foreach($database as $album){    //ciclo foreach di album in database 
    if (!in_array($album['genre'], $genres)){   //condizione : se genre non si trova dfentro l'array genres
      $genres[] = $album['genre'];  // lo aggiungo nell'array genres
    };
  } 
  
  
  if (count($albums) === 0){ //se la lunghezza di albums è uguale a 0 allora
    foreach ($database as $album){ //faccio un ciclo di album dentro database e
      if ($album['genre'] === $_GET['genre']){ // se genre dentro albums è uguale al get genre
        $albums[] = $album; // allora salvo album dentro l'array vuoto albums
      }
    }
  }
  
  $response = [
    'albums' => $albums,
    'genres' => $genres
  ];
  
  header('Content-Type: application/json');
  
  echo json_encode($response);
?>

