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
        <div class="container">
            <a class="card-a" href="mechanics">
                <div class="card">
                    <h1>Mechanics</h1>
                    <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
                </div>
            </a>
            <a class="card-a" href="techniques">
                <div class="card">
                    <h1>Technieken</h1>
                    <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
                </div>
            </a>
            <a class="card-a" href="story">
                <div class="card">
                    <h1>Verhaal</h1>
                    <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
                </div>
            </a>
            <a class="card-a" href="photo-gallery">
                <div class="card">
                    <h1>Fotogallerij</h1>
                    <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
                </div>
            </a>
            <a class="card-a" href="about-us">
                <div class="card">
                    <h1>Over ons</h1>
                    <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
                </div>
            </a>
            <a class="card-a" href="contact">
                <div class="card">
                    <h1>Contact</h1>
                    <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
                </div>
            </a>
        </div>
    </main>
</body>

</html>
