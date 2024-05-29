<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kodutöö nr2</title>
</head>
<body>
    <!-- Navi -->
    <style>
      .navbar {
          padding-top: 10px; /* Adjust the top padding */
          padding-bottom: 10px; /* Adjust the bottom padding */
      }
  </style>
  
    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container-fluid">
            <img src="ikoon.jpg" width="40" height="40" alt="">
          <a class="navbar-brand fs-6"  href="index.phps">Avaleht</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-6 color: text-body-secondary" aria-current="page" href="#">Tooted</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 color: text-body-secondary" href="teenused.php">Teenused</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 color: text-body-secondary" href="kontakt.php">Kontakt</a>
              </li>
    
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Otsi" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Otsi</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container mt-5">
        <br>

        <h2 class="mb-4">Oskused</h2>
    <?php
     $oskused = array('HTML', 'CSS', 'Bootstrap', 'PHP');
     $varvid = array('primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark');
     $tekstiv = array('success', 'danger', 'warning', 'info', 'dark');
     

     foreach ($oskused as $oskus) {
      $varv = $varvid[array_rand($varvid)];
      $text = $tekstiv[array_rand($tekstiv)];
      $width = rand(10, 100);
      echo "<div class='bar bg-$varv text-$text' style='width: $width%'>$oskus</div>
      <br>";
     }
    ?>

<section class="container mt-4">
    <h2 class="text-center">Töötajad</h2>
    <div class="row row-cols-1 row-cols-md-6 g-4">
        <?php
        // 
        $pildid = ["devlin.jpg", "freeland.jpg", "gabriel.jpg", "pete.jpg", "peterus.jpg", "prentice.jpg"];

        // 
        foreach ($pildid as $pilt) {
            $filename = pathinfo($pilt, PATHINFO_FILENAME);
            $nimi = ucfirst($filename);
            $email = $filename . "@sinunimi.ee";

            echo "
            <div class='col text-center'>
                <div class='card h-100'>
                    <img src='{$pilt}' alt='Pilt' class='img-fluid'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$nimi}</h5>
                        <p class='card-text'>{$email}</p>
                    </div>
                </div>
            </div>";
        }
        ?>
    </div>
</section>



      <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Krista Kutsar ITS-23</span>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
 
</body>

</html>