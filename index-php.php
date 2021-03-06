<?php
  require_once __DIR__ . '/data/db.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
  <title>Document</title>
</head>
<body>



<header>
  <div>
    <!-- <h1>logo spotify</h1> -->
    <div class="logo ms-3">

    <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="logo spotify">
    </div>

  </div>
</header>



<main class="container mt-1">
    <div class="d-flex flex-wrap">
      <?php foreach($database as $disco): ?>
        <div class="disc p-3 text-center">
          <div class="p-3">
            <img class="img-fluid mb-3" src="<?php echo $disco ['poster'] ?>" alt="<?php echo $disco ['title'] ?>">
            <h4><?php echo $disco ['title'] ?></h4>
            <h5><?php echo $disco ['year'] ?></h5>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
</main>


  
</body>
</html>