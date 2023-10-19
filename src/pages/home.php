<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <a class="header-image-link" href="index.html">
        <img class="header-image" src="assets/logo.png" alt="Celeste logo">
    </a>
    <?php require("src/header.php"); ?>

    <main class="home">
        <h1>Over Celeste</h1>
        <p><?= Lorem::paragraph() ?></p>
        <div class="grid">
            <div class="container">
                <h1><a href="mechanics">Mechanics</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="techniques">Technieken</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="story">Verhaal</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="photo-gallery">Fotogallerij</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="about-us">Over ons</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="contact">Contact</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
        </div>
        <div class="sources">
            De afbeeldingen en gifs op deze website komen van <a href="https://celeste.ink/w/index.php?title=Main_Page&oldid=5600">Celeste Wiki</a><br>
            Het Renogare font is van <a href="https://www.dafont.com/renogare.font">Dafont.com</a><br>
            Icoontjes komen van <a href="https://fontawesome.com/icons">FontAwesome</a>
        </div>
    </main>
</body>

</html>