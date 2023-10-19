<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Techniques</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="techniques.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="techniques">
        <h1>Techniques</h1>
        <p><?= Lorem::paragraph() ?></p>

        <h2 id="dash-tech">Dash Tech</h2>
        <?php
        foreach (array_filter($techniques, function ($item) {
            return $item->type == "dash-tech";
        }) as $technique) {
        ?>
            <h3><a href="./technique/<?= $technique->name ?>.html"><?= $technique->name ?></a></h3>
            <p>
                <?= Lorem::paragraph(3); ?>
            </p>
        <?php
        }
        ?>
        <h2 id="dashless-tech">Dashless Tech</h2>
        <?php
        foreach (array_filter($techniques, function ($item) {
            return $item->type == "dashless-tech";
        }) as $technique) {
        ?>
            <h3><a href="./technique/<?= $technique->name ?>.html"><?= $technique->name ?></a></h3>
            <p>
                <?= Lorem::paragraph(3); ?>
            </p>
        <?php
        }
        ?>
    </main>
</body>