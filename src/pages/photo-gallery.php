<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Fotogallerij</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="photo-gallery">
        <div class="gallery">
            <?php
            $photos = array_values(array_diff(scandir(__DIR__ . "/../../dist/assets/photo-gallery"), ["..", "."]));

            foreach ($photos as $photo) {
            ?>
                <img class="gallery-image" src="<?= "../assets/photo-gallery/" . $photo ?>" alt="gallery-image">
            <?php
            }
            ?>
        </div>

    </main>
</body>

</html>