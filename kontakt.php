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
          <a class="navbar-brand fs-6"  href="index.html">Avaleht</a>
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
    
<!-- oskused -->
<section class="container mt-4">
  <h2 class="text-center">Minu oskused</h2>
  <div class="container">
      <?php
      // massiivid oskustest ja värvidest
      $skills = ["HTML", "CSS", "Bootstrap", "PHP"];
      $colors = ["primary", "secondary", "success", "danger", "warning", "info", "dark"];

      // oskuste riba genereerimine suvalise värvi ja väärtusega
      foreach ($skills as $key => $skill) {
          $value = rand(10, 100);
          $color = $colors[array_rand($colors)];
          echo "
          <div class='mb-3'>
              <div class='d-flex justify-content-between'>
                  <span>{$skill}</span>
                  <span>{$value}%</span>
              </div>
              <div class='progress'>
                  <div class='progress-bar bg-{$color}' role='progressbar' style='width: {$value}%' aria-valuenow='{$value}' aria-valuemin='0' aria-valuemax='100'></div>
              </div>
          </div>";
      }
      ?>
  </div>
</section>

 <!-- töötajate pildid -->
<section class="container mt-4">
  <h2 class="text-center">Meie töötajad</h2>
  <div class="row row-cols-1 row-cols-md-6 g-4">
      <?php
      // kataloog töötajate piltidest
      $images = ["devlin.jpg", "freeland.jpg", "gabriel.jpg", "pete.jpg", "peterus.jpg", "prentice.jpg"];

      // genereerib pildid ja andmed kokku
      foreach ($images as $image) {
          $filename = pathinfo($image, PATHINFO_FILENAME);
          $name = ucfirst($filename);
          $email = $filename . "@sinunimi.ee";

          echo "
          <div class='col text-center'>
              <div class='card h-100'>
                  <img src='{$image}' alt='Minu Pilt' class='img-fluid'>
                  <div class='card-body'>
                      <h5 class='card-title'>{$name}</h5>
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