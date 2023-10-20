<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - <?= $mechanic->name ?></title>
    <link rel="icon" href="../assets/ico.png">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/pages.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="info">
        <h1><?= $mechanic->name ?></h1>
        <hr />

        <div class="card container">
            <h2><?= $mechanic->name ?></h2>
            <img src="../assets/mechanics/<?= $mechanic->asset ?>" alt="">
            <h3>Found in chapters</h3>
            <p>
                <?php
                foreach ($mechanic->chapters as $chapter) {
                ?>
                    <a href="../mechanics.html#chapter-<?= substr($chapter, 0, 1) ?>"><?= $chapter ?></a>
                <?php
                }
                ?>
            </p>
        </div>

        <p><?= Lorem::text(2, 5, 15, "</p><p>") ?></p>

        <h2>Opmerkingen</h2>
        <hr />
        <ul>
            <li><?= Lorem::text(3, 2, 10, "</li><li>") ?></li>
        </ul>

        <h2>Tips</h2>
        <hr />
        <ul>
            <li><?= Lorem::text(3, 2, 10, "</li><li>") ?></li>
        </ul>

        <h2>Weetjes</h2>
        <hr />
        <ul>
            <li><?= Lorem::text(3, 2, 10, "</li><li>") ?></li>
        </ul>

        <h2>Geschiedenis</h2>
        <hr />
        <p><?= Lorem::text(3, 1, 5, "</p><p>") ?></p>

        <div class="container">
            <h2>Andere mechanics</h2>
            <ul class="related">
                <?php foreach ($mechanics as $mechanic2) : ?>
                    <?php if ($mechanic === $mechanic2) {
                        continue;
                    } ?>
                    <li><a href="./<?= $mechanic2->title ?>.html"><?= $mechanic2->name ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
</body>

</html>
