<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Mechanics</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="mechanics.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main>
        <h1>Mechanics</h1>
        <p><?= Lorem::paragraph() ?></p>

        <h2 class="chapter" id="chapter-all">Alle hoofdstukken</h2>
        <ul class="mechanics grid">
            <?php foreach ($mechanics as $mechanic) : ?>
                <?php if ($mechanic->home !== "all") {
                    continue;
                } ?>
                <li class="mechanic">
                    <img class="image" src="../assets/mechanics/<?= $mechanic->asset ?>">
                    <h2 class="name"><a href="./mechanic/<?= $mechanic->name ?>.html"><?= $mechanic->name ?></a></h2>
                    <p class="description"><?= Lorem::paragraph(3) ?></p>
                </li>
            <?php endforeach ?>
        </ul>

        <?php

        $sections = [
            "1" => "Hoofdstuk 1 - Forsaken City",
            "2" => "Hoofdstuk 2 - Old Site",
            "3" => "Hoofdstuk 3 - Celestial Resort",
            "4" => "Hoofdstuk 4 - Golden Ridge",
            "5" => "Hoofdstuk 5 - Mirror Temple",
            "6" => "Hoofdstuk 6 - Reflection",
            "7" => "Hoofdstuk 7 - Summit",
            "8" => "Hoofdstuk 8 - Core",
            "9" => "Hoofdstuk 9 - Farewell",
        ];

        ?>
        <?php foreach ($sections as $section => $sectionName) : ?>
            <h2 class="chapter" id="chapter-<?= $section ?>"><?= $sectionName ?></h2>
            <ul class="mechanics grid">
                <?php foreach ($mechanics as $mechanic) : ?>
                    <?php if ($mechanic->home != $section) {
                        continue;
                    } ?>
                    <li class="mechanic">
                        <img class="image" src="../assets/mechanics/<?= $mechanic->asset ?>">
                        <h2 class="name"><a href="./mechanic/<?= $mechanic->name ?>.html"><?= $mechanic->name ?></a></h2>
                        <p class="description"><?= Lorem::paragraph(3) ?></p>
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
