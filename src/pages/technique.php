<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - <?= $technique->name ?></title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../technique.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="technique">
        <h1><?= $technique->name ?></h1>
        <?php
        if ($technique->gifPath != null) {
        ?>
            <div class="card container">
                <h2><?= $technique->name ?></h2>
                <img src="<?= $technique->gifPath ?>" alt="">
            </div>

        <?php
        };
        ?>
        <p class="description"><?= Lorem::paragraph(9) ?></p>
    </main>
</body>