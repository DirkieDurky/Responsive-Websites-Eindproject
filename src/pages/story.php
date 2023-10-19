<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Story</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="story">
        <h1>Story</h1>
        <p>
            <?php
            echo $lipsum->words(40);
            ?>
        </p>
        <h2 id="chapter-1">Hoofdstuk 1 - Forsaken City</h2>
        <div class="hor-flex">
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-1.png" alt="Chapter 1">
            </div>
            <div class="column">
                <h3>A-Side</h3>
                <p>
                    <?php
                    echo $lipsum->paragraph();
                    ?>
                </p>
                <h3>Start</h3>
                <p>
                    <?php
                    echo $lipsum->paragraph();
                    ?>
                </p>
                <h3>Crossing</h3>
                <p>
                    <?php
                    echo $lipsum->paragraph();
                    ?>
                </p>
                <h3>Chasm</h3>
                <p>
                    <?php
                    echo $lipsum->paragraph();
                    ?>
                </p>
            </div>
        </div>
        <h2 id="chapter-2">Hoofdstuk 2 - Old Site</h2>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-2.png" alt="Chapter 1">
            </div>
        </div>
        <h2 id="chapter-3">Hoofdstuk 3 - Celestial Resort</h2>
        <div class="hor-flex">
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-3.png" alt="Chapter 1">
            </div>
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h2 id="chapter-4">Hoofdstuk 4 - Golden Ridge</h2>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-4.png" alt="Chapter 1">
            </div>
        </div>
        <h2 id="chapter-5">Hoofdstuk 5 - Mirror Temple</h2>
        <div class="hor-flex">
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-5.png" alt="Chapter 1">
            </div>
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h2 id="chapter-6">Hoofdstuk 6 - Reflection</h2>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-6.png" alt="Chapter 1">
            </div>
        </div>
        <h2 id="chapter-7">Hoofdstuk 7 - Summit</h2>
        <div class="hor-flex">
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-7.png" alt="Chapter 1">
            </div>
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h2 id="chapter-8">Hoofdstuk 8 - Core</h2>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-8.png" alt="Chapter 1">
            </div>
        </div>
        <h2 id="chapter-9">Hoofdstuk 9 - Farewell</h2>
        <div class="hor-flex">
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/celeste-complete-screens/complete-9.png" alt="Chapter 1">
            </div>
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
    </main>
</body>

</html>