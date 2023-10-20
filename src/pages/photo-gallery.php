<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Fotogallerij</title>
    <link rel="icon" href="../assets/ico.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/pages.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="photo-gallery">
        <h1>Gallerij</h1>
        <hr />

        <div class="gallery">
            <?php
            $photos = array_values(array_diff(scandir(__DIR__ . "/../../dist/assets/photo-gallery"), ["..", "."]));

            foreach ($photos as $photo) {
            ?>
                <img src="<?= "../assets/photo-gallery/" . $photo ?>" alt="gallery-image">
            <?php
            }
            ?>
        </div>

    </main>
</body>

</html>
