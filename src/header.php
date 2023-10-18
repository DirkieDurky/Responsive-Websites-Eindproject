<?php

$path = str_repeat("../", $depth);

?>
<nav class="page-header">
    <input class="dropdown-toggle" id="pages-toggle" type="checkbox">
    <label class="menu-toggle" for="pages-toggle">=</label>
    <ul class="pages">
        <li class="page dropdown">
            <input class="dropdown-toggle" id="mechanics-toggle" type="checkbox">
            <label class="dropdown-label" for="mechanics-toggle"><a class="page-title dropdown-arrow" href="<?= $path ?>mechanics">Mechanics</a></label>
            <ul class="sections">
                <?php

                $chapters = [
                    "all" => "All Chapters",
                    "1" => "Forsaken City",
                    "2" => "Old Site",
                    "3" => "Celestial Resort",
                    "4" => "Golden Ridge",
                    "5" => "Mirror Temple",
                    "6" => "Reflection",
                    "7" => "Summit",
                    "8" => "Core",
                    "9" => "Farewell",
                ];

                ?>
                <li class="section"><a href=" <?= $path ?>mechanics">Naar pagina</a></li>
                <?php foreach ($chapters as $chapter => $chapterName) : ?>
                    <li class="section dropdown">
                        <a class="dropdown-arrow" href="<?= $path ?>mechanics#chapter-<?= $chapter ?>"><?= $chapterName ?></a>
                        <ul class="topics">
                            <li class="topic"><a href="<?= $path ?>mechanics#chapter-<?= $chapter ?>">Naar onderdeel</a></li>
                            <?php foreach ($mechanics as $mechanic) : ?>
                                <?php if ($mechanic->home != $chapter) {
                                    continue;
                                } ?>
                                <li class="topic"><a href="<?= $path ?>mechanics/mechanic/<?= $mechanic->name ?>.html"><?= $mechanic->name ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                <?php endforeach ?>
            </ul>
        </li>
        <li class="page dropdown">
            <input class="dropdown-toggle" id="techniques-toggle" type="checkbox">
            <label class="dropdown-label" for="techniques-toggle"><a class="page-title dropdown-arrow" href="<?= $path ?>techniques">Techniques</a></label>
            <ul class="sections">
                <li class="section"><a href="<?= $path ?>techniques#dash-tech">Dash tech</a></li>
                <li class="section"><a href="<?= $path ?>techniques#dashless-tech">Dashless tech</a></li>
            </ul>
        </li>
        <li class="page dropdown">
            <input class="dropdown-toggle" id="story-toggle" type="checkbox">
            <label class="dropdown-label" for="story-toggle"><a class="page-title dropdown-arrow" href="<?= $path ?>story">Story</a></label>
            <ul class="sections">
                <li class="section"><a href="<?= $path ?>story">Naar pagina</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-1">Chapter 1</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-2">Chapter 2</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-3">Chapter 3</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-4">Chapter 4</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-5">Chapter 5</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-6">Chapter 6</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-7">Chapter 7</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-8">Chapter 8</a></li>
                <li class="section"><a href="<?= $path ?>story#chapter-9">Chapter 9</a></li>
            </ul>
        </li>
        <li class="page"><a class="page-title" href="<?= $path ?>photo-gallery">Fotogallerij</a></li>
        <li class="page"><a class="page-title" href="<?= $path ?>over-ons">Over ons</a></li>
        <li class="page"><a class="page-title" href="<?= $path ?>contact">Contact</a></li>
    </ul>
</nav>
