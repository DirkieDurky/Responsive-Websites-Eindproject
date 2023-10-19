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

    <main class="about-us">
        <div class="flex-wrap">
            <div class="section">
                <div class="image-container container">
                    <img class="about-me-image" src="../assets/about-us/dirk-freijters.jpg" alt="picture Tijs">
                </div>
                <div class="about-me container left">
                    <div class="title"><img class="arrow-icon" src="../assets/about-us/arrow-left-solid.svg" alt="arrow-left">Over mij, Dirk Freijters</div>
                    <div class="content">
                        <p><?= Lorem::paragraph(3, 10) ?></p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="about-me container right">
                    <div class="title">Over mij, Cas de Loijer<img class="arrow-icon" src="../assets/about-us/arrow-right-solid.svg" alt="arrow-right"></div>
                    <div class="content">
                        <p><?= Lorem::paragraph(3, 10) ?></p>
                    </div>
                </div>
                <div class="image-container container">
                    <img class="about-me-image" src="../assets/about-us/cas-de-loijer.jpg" alt="picture Marnix">
                </div>
            </div>
        </div>

    </main>

</html>