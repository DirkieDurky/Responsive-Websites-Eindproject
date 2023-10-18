<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mechanic->name ?></title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../mechanic.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="mechanic">
        <h1><?= $mechanic->name ?></h1>
        <hr />

        <div class="card">
            <h2><?= $mechanic->name ?></h2>
            <img src="../../assets/Temp.gif" alt="">
            <h3>Found in chapters</h3>
            <p><?= implode(", ", $mechanic->chapters) ?></p>
        </div>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti eligendi eveniet deserunt sequi
            distinctio, optio dolores repudiandae odit harum doloribus perferendis asperiores corporis explicabo
            molestias cupiditate tenetur illo nobis! Ratione pariatur dolorem voluptatem sunt, sint delectus
            exercitationem repellendus ad atque minus hic sit sequi, facilis ducimus. Quam non nobis assumenda odit ipsa
            eaque fuga? Ratione iste perspiciatis ipsum, tenetur accusantium alias laboriosam molestias quis doloribus
            corporis sequi veritatis veniam cum, molestiae odio debitis excepturi eaque id aut dolorem iure a et
            necessitatibus! Voluptatum eaque, autem voluptatem ullam impedit cum saepe quasi tempora illum consectetur
            natus rem id, aspernatur nisi distinctio?</p>

        <h2>Tips</h2>
        <hr />
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit debitis nesciunt velit quod minus aliquam asperiores error voluptatum quos voluptatem odio ratione, enim facere.</p>

        <h2>Notes</h2>
        <hr />
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti aspernatur ex similique minima modi! Ad minus nisi cupiditate assumenda quisquam debitis, unde eius asperiores aspernatur.</p>

        <h2>History</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptates doloremque dolores dolorem suscipit facere modi beatae tenetur harum, distinctio quam nam molestias excepturi molestiae.</p>

        <h2>Other mechanics</h2>
        <ul>
            <?php foreach ($mechanics as $mechanic2) : ?>
                <?php if ($mechanic === $mechanic2) {
                    continue;
                } ?>
                <li><a href="./<?= $mechanic2->name ?>.html"><?= $mechanic2->name ?></a></li>
            <?php endforeach ?>
        </ul>
    </main>
</body>

</html>
