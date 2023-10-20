<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Technieken</title>
    <link rel="icon" href="./assets/ico.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/pages.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="techniques">
        <h1>Techniques</h1>
        <hr />
        <p><?= Lorem::paragraph() ?></p>

        <img class="checkpoint-image" src="./assets/checkpoints/7_e-00b.png" alt="Foto van spel">
        <h2 id="dash-tech"><a href="#dash-tech" class="fragment">Technieken met dash</a></h2>
        <p><?= Lorem::paragraph(2, 10) ?></p>
        <hr class="full-width" /><br />
        <?php
        foreach (array_filter($techniques, function ($item) {
            return $item->type == "dash-tech";
        }) as $technique) {
        ?>
            <h3><a href="./techniques/<?= $technique->title ?>.html"><?= $technique->name ?></a></h3>
            <p>
                <?= Lorem::paragraph(3); ?>
            </p>
        <?php
        }
        ?>
        <img class="checkpoint-image" src="./assets/checkpoints/10_i-00.png" alt="Foto van spel">
        <h2 id="dashless-tech"><a href="#dashless-tech" class="fragment">Technieken zonder dash</a></h2>
        <p><?= Lorem::paragraph(2, 10) ?></p>
        <hr class="full-width" /><br />
        <?php
        foreach (array_filter($techniques, function ($item) {
            return $item->type == "dashless-tech";
        }) as $technique) {
        ?>
            <h3><a href="./techniques/<?= $technique->title ?>.html"><?= $technique->name ?></a></h3>
            <p>
                <?= Lorem::paragraph(3); ?>
            </p>
        <?php
        }
        ?>
    </main>
</body>
