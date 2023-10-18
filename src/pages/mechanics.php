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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quis animi deleniti adipisci corrupti sapiente quasi tempora incidunt nihil similique eaque omnis inventore, ad vitae? Quasi sit alias animi porro nesciunt ducimus distinctio excepturi quod eius consectetur consequuntur, facere quas dolorum nisi esse beatae, accusantium debitis vel modi. Delectus aperiam, eaque ea veniam quaerat adipisci natus recusandae dolore. Dolorum nam corporis voluptatum alias consequatur, corrupti, deleniti at laborum expedita mollitia dolorem dicta temporibus cupiditate quisquam, nulla dignissimos. Autem rem doloribus quaerat ullam non deleniti officiis doloremque sunt. Exercitationem animi perspiciatis nesciunt ipsam minus eaque aperiam, placeat adipisci, nulla amet ut.</p>

        <h2 class="chapter">All chapters</h2>
        <ul class="mechanics">
            <?php foreach ($mechanics as $mechanic) : ?>
                <?php if ($mechanic->home !== "all") {
                    continue;
                } ?>
                <li class="mechanic">
                    <img class="image" src="../assets/Temp.gif">
                    <h2 class="name"><a href="./mechanic/<?= $mechanic->name ?>.html"><?= $mechanic->name ?></a></h2>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolor ullam tempore consequuntur repudiandae nemo atque dicta tenetur perferendis optio consequatur natus earum impedit aliquid dolore ab, odio maiores reprehenderit.</p>
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
            <h2 class="chapter" id="chapter-1"><?= $sectionName ?></h2>
            <ul class="mechanics">
                <?php foreach ($mechanics as $mechanic) : ?>
                    <?php if ($mechanic->home != $section) {
                        continue;
                    } ?>
                    <li class="mechanic">
                        <img class="image" src="../assets/Temp.gif">
                        <h2 class="name"><a href="./mechanic/<?= $mechanic->name ?>.html"><?= $mechanic->name ?></a></h2>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolor ullam tempore consequuntur repudiandae nemo atque dicta tenetur perferendis optio consequatur natus earum impedit aliquid dolore ab, odio maiores reprehenderit.</p>
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
