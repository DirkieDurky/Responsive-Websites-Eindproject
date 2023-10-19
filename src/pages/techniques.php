<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Techniques</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="techniques">
        <h1>Techniques</h1>
        <p>
            <?php
            echo $lipsum->words(40);
            ?>

        </p>
        <h2 id="dash-tech">Dash Tech</h2>
        <div class="column">
            <?php
            echo $lipsum->words(40);
            ?>
        </div>
        <h3>Superdash (Super)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/techniques/super-dash.gif" alt="Super dash showcase">
            </div>
        </div>
        <h3>Hyperdash (Hyper)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h3>Wavedash</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/techniques/wavedash.gif" alt="Wavedash showcase">
            </div>
        </div>
        <h3>Ultradash (Ultra)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h3>Demodash (Demo)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h3>Wallbounce (wb)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/techniques/wallbouncing.gif" alt="Wallbounce showcase">
            </div>
        </div>
        <h2 id="dashless-tech">Dashless Tech</h2>
        <div class="column">
            <?php
            echo $lipsum->words(40);
            ?>
        </div>
        <h3>Bunnyhop (Bhop)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h3>Cornerkick</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h3>Crouch Jump / Crouch Climb</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h3>Neutral Jump (Neutral)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/techniques/neutral-jumping.gif" alt="Neutral jump showcase">
            </div>
        </div>
        <h3>5 Jump</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h3>Cornerboost (cb)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
        <h3>Throwable Backboost (Backboost)</h3>
        <div class="hor-flex">
            <div class="column">
                <?php
                echo $lipsum->paragraph();
                ?>
            </div>
        </div>
    </main>
</body>