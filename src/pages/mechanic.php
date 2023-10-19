<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mechanic->name ?></title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../mechanic.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="mechanic">
        <h1><?= $mechanic->name ?></h1>
        <hr />

        <div class="card">
            <h2><?= $mechanic->name ?></h2>
            <img src="../../assets/Temp.gif" alt="">
            <h3>Found in chapters</h3>
            <p><?= implode(", ", $mechanic->chapters) ?></p>
        </div>

        <p>
            <?php
            echo $lipsum->paragraph();
            ?>
        </p>

        <h2>Tips</h2>
        <hr />
        <p>
            <?php
            echo $lipsum->paragraph();
            ?>
        </p>

        <h2>Notes</h2>
        <hr />
        <p>
            <?php
            echo $lipsum->paragraph();
            ?>
        </p>

        <h2>History</h2>
        <hr>
        <p>
            <?php
            echo $lipsum->paragraph();
            ?>
        </p>

        <h2>Other mechanics</h2>
        <ul>
            <?php foreach ($mechanics as $mechanic2) : ?>
                <?php if ($mechanic === $mechanic2) {
                    continue;
                } ?>
                <li><a href="./<?= $mechanic2->name ?>.html"><?= $mechanic2->name ?></a></li>
            <?php endforeach ?>
        </ul>
    </main>
</body>

</html>