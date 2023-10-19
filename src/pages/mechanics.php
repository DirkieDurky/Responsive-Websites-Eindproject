<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanics</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="mechanics.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main>
        <h1>Mechanics</h1>
        <p>
            <?php
            echo $lipsum->paragraph();
            ?>
        </p>

        <h2 class="chapter" id="chapter-all">All chapters</h2>
        <ul class="mechanics">
            <?php foreach ($mechanics as $mechanic) : ?>
                <?php if ($mechanic->home !== "all") {
                    continue;
                } ?>
                <li class="mechanic">
                    <img class="image" src="../assets/Temp.gif">
                    <h2 class="name"><a href="./mechanic/<?= $mechanic->name ?>.html"><?= $mechanic->name ?></a></h2>
                    <p class="description">
                        <?php
                        echo $lipsum->paragraph();
                        ?>
                    </p>
                </li>
            <?php endforeach ?>
        </ul>

        <?php

        $sections = [
            "1" => "Chapter 1 - Forsaken City",
            "2" => "Chapter 2 - Old Site",
            "3" => "Chapter 3 - Celestial Resort",
            "4" => "Chapter 4 - Golden Ridge",
            "5" => "Chapter 5 - Mirror Temple",
            "6" => "Chapter 6 - Reflection",
            "7" => "Chapter 7 - Summit",
            "8" => "Chapter 8 - Core",
            "9" => "Chapter 9 - Farewell",
        ];

        ?>
        <?php foreach ($sections as $section => $sectionName) : ?>
            <h2 class="chapter" id="chapter-<?= $section ?>"><?= $sectionName ?></h2>
            <ul class="mechanics">
                <?php foreach ($mechanics as $mechanic) : ?>
                    <?php if ($mechanic->home != $section) {
                        continue;
                    } ?>
                    <li class="mechanic">
                        <img class="image" src="../assets/Temp.gif">
                        <h2 class="name"><a href="./mechanic/<?= $mechanic->name ?>.html"><?= $mechanic->name ?></a></h2>
                        <p class="description">
                            <?php
                            echo $lipsum->paragraph();
                            ?>
                        </p>
                        <?php if (count($mechanic->chapters) === 1) : ?>
                            <p class="chapters">Only found in chapter: <?= $mechanic->chapters[0] ?></p>
                        <?php else : ?>
                            <p class="chapters">Found in chapters: <?= implode(", ", $mechanic->chapters) ?></p>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endforeach ?>
    </main>
</body>

</html>