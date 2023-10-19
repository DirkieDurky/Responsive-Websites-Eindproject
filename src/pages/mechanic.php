<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - <?= $mechanic->name ?></title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../mechanic.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="mechanic">
        <h1><?= $mechanic->name ?></h1>
        <hr />

        <div class="card container">
            <h2><?= $mechanic->name ?></h2>
            <img src="../../assets/Temp.gif" alt="">
            <h3>Found in chapters</h3>
            <p><?= implode(", ", $mechanic->chapters) ?></p>
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
        <hr>
        <p><?= Lorem::text(3, 1, 5, "</p><p>") ?></p>

        <div class="container">
            <h2>Andere mechanics</h2>
            <ul class="other-mechanics">
                <?php foreach ($mechanics as $mechanic2) : ?>
                    <?php if ($mechanic === $mechanic2) {
                        continue;
                    } ?>
                    <li><a href="./<?= $mechanic2->name ?>.html"><?= $mechanic2->name ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
</body>

</html>