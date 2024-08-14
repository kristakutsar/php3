<?php
$error_message = '';
$result = '';

// kasutan GET meetodit andmete saamiseks
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    $input_value1 = isset($_GET['arv1']) ? $_GET['arv1'] : '';

  
    $select_option = isset($_GET['select_option']) ? $_GET['select_option'] : '';

    // Väärtus peab olema suurem kui 0
    $input_value1 = max(0, $input_value1);

    // Kontroll et mõtlemad väljad oleksid täidetud
    if ($input_value1 !== '') {
        // Veateade kui pakett on valimata
        if ($select_option === 'Vali siit') {
            $error_message = 'Palun vali pakett!';
        } else {
            // arvutus vastavalt paketi valikule ja inimeste arvule
            if ($select_option == 'Söök') {
                $result = 12.5 * $input_value1;
            } elseif ($select_option == 'Söök ja jook') {
                $result = 15 * $input_value1;
            } elseif ($select_option == 'Erimenüü') {
                $result = 20 * $input_value1;
            } elseif ($select_option == 'Erimenüü ja jook') {
                $result = 22.5 * $input_value1;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Kodutöö nr2</title>
</head>
<body>
    <!-- Navi -->
    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container-fluid">
            <img src="ikoon.jpg" width="40" height="40" alt="">
            <a class="nav-link fs-6 color: text-body-secondary" href="index.html">Avaleht</a>
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
        <h2 class="mb-4">Täidame sinu peolaua!</h2>
        <form action="#" method="GET">
            <div class="form-group">
                <label class="mb-4" for="select_option">Toitlustuse paketid</label>
                <br>
                <select class="form-control" id="select_option" name="select_option">
                    <option value="Vali siit">Vali siit</option>
                    <option value="Söök">Söök</option>
                    <option value="Söök ja jook">Söök + jook</option>
                    <option value="Erimenüü">Erimenüü (V, GV, LV)</option>
                    <option value="Erimenüü ja jook">Erimenüü + jook (V, GV, LV)</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="arv1">Inimeste arv</label>
                <input type="number" class="form-control" id="arv1" name="arv1" required min="1">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Arvuta</button>
        </form>

        <!-- Display error message -->
        <?php if ($error_message): ?>
            <p style="color:red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <!-- Display result -->
        <?php if ($result !== ''): ?>
            <p>KOKKU: <?php echo $result; ?>€</p>
        <?php endif; ?>
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Krista Kutsar ITS-23</span>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
