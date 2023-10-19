<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Over ons</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="over-ons">
        <div class="container">
            <div class="section">
                <div class="image-container">
                    <img class="about-me-image" src="../assets/over-ons/dirk-freijters.jpg" alt="picture Tijs">
                </div>
                <div class="about-me left">
                    <div class="title"><img class="arrow-icon" src="../assets/over-ons/arrow-left-solid.svg" alt="arrow-left">Over mij, Dirk Freijters</div>
                    <div class="content">
                        <?php
                        echo $lipsum->paragraph();
                        ?>
                    </div>
                    <div class="footer"></div>
                </div>
            </div>
            <div class="section">
                <div class="about-me right">
                    <div class="title">Over mij, Cas de Loijer<img class="arrow-icon" src="../assets/over-ons/arrow-right-solid.svg" alt="arrow-right"></div>
                    <div class="content">
                        <?php
                        echo $lipsum->paragraph();
                        ?>
                    </div>
                    <div class="footer"></div>
                </div>
                <div class="image-container">
                    <img class="about-me-image" src="../assets/over-ons/cas-de-loijer.jpg" alt="picture Marnix">
                </div>
            </div>
    </main>

</html>