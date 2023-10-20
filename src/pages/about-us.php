<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Over ons</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/pages.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="about-us">
        <h1>Over Ons</h1>
        <hr />
        <div class="grid">
            <div class="dirk image container">
                <img src="../assets/about-us/dirk-freijters.jpg" alt="picture Dirk">
            </div>
            <div class="dirk text container">
                <h1><img class="arrow-icon left" src="../assets/about-us/arrow-left-solid.svg" alt="arrow-right">Over mij, Dirk Freijters</h1>

                <p><?= Lorem::paragraph(3, 10) ?></p>
            </div>

            <div class="cas image container">
                <img src="../assets/about-us/cas-de-loijer.jpg" alt="picture Cas">
            </div>
            <div class="cas text container">
                <h1>Over mij, Cas de Loijer <img class="arrow-icon right" src="../assets/about-us/arrow-right-solid.svg" alt="arrow-right"></h1>

                <p><?= Lorem::paragraph(3, 10) ?></p>
            </div>
        </div>
    </main>

</html>
