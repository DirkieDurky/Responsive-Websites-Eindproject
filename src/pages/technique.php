<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - <?= $technique->name ?></title>
    <link rel="icon" href="../assets/ico.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/pages.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="info">
        <h1><?= $technique->name ?></h1>
        <hr />

        <?php if ($technique->gifPath != null) : ?>
            <div class="card container">
                <h2><?= $technique->name ?></h2>
                <img src="../assets/techniques/<?= $technique->gifPath ?>" alt="">
            </div>
        <?php endif ?>

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
            <h2>Andere technieken</h2>
            <ul class="related">
                <?php foreach ($techniques as $technique2) : ?>
                    <?php if ($technique === $technique2) {
                        continue;
                    } ?>
                    <li><a href="./<?= $technique2->title ?>.html"><?= $technique2->title ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
</body>
