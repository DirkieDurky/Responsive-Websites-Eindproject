<?php

$path = str_repeat("../", $depth);

?>
<nav class="page-header">
    <input class="dropdown-toggle" id="pages-toggle" type="checkbox">
    <label class="menu-toggle" for="pages-toggle"><img class="menu-icon" src="<?= $path . "assets/bars-solid.svg" ?>" alt="menu-icon"></label>
    <ul class="pages">
        <li class="page page-title"><a href="<?= $path ?>index.html">Startpagina</a></li>
        <li class="page dropdown">
            <input class="dropdown-toggle" id="mechanics-toggle" type="checkbox">
            <label class="dropdown-label page-title" for="mechanics-toggle"><a class="dropdown-arrow" href="<?= $path ?>mechanics">Mechanics</a></label>
            <ul class="sections">
                <?php

                $chapters = [
                    "all" => "Alle hoofdstukken",
                    "1" => "Hoofdstuk 1 - Forsaken City",
                    "2" => "Hoofdstuk 2 - Old Site",
                    "3" => "Hoofdstuk 3 - Celestial Resort",
                    "4" => "Hoofdstuk 4 - Golden Ridge",
                    "5" => "Hoofdstuk 5 - Mirror Temple",
                    "6" => "Hoofdstuk 6 - Reflection",
                    "7" => "Hoofdstuk 7 - Summit",
                    "8" => "Hoofdstuk 8 - Core",
                    "9" => "Hoofdstuk 9 - Farewell",
                ];

                ?>
                <li class="section"><a href=" <?= $path ?>mechanics">Naar pagina</a></li>
                <?php foreach ($chapters as $chapter => $chapterName) : ?>
                    <li class="section dropdown">
                        <a class="dropdown-arrow" href="<?= $path ?>mechanics#chapter-<?= $chapter ?>"><?= $chapterName ?></a>
                        <ul class="topics">
                            <li class="topic"><a href="<?= $path ?>mechanics#chapter-<?= $chapter ?>">Naar onderdeel</a></li>
                            <?php foreach ($mechanics as $headerMechanic) : ?>
                                <?php if ($headerMechanic->home != $chapter) {
                                    continue;
                                } ?>
                                <li class="topic"><a href="<?= $path ?>mechanics/mechanic/<?= $headerMechanic->name ?>.html"><?= $headerMechanic->name ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                <?php endforeach ?>
            </ul>
        </li>
        <li class="page dropdown">
            <input class="dropdown-toggle" id="techniques-toggle" type="checkbox">
            <label class="dropdown-label page-title" for="techniques-toggle"><a class="dropdown-arrow" href="<?= $path ?>techniques">Technieken</a></label>
            <ul class="sections">
                <li class="section"><a href="<?= $path ?>techniques#dash-tech">Dash tech</a></li>
                <li class="section"><a href="<?= $path ?>techniques#dashless-tech">Dashless tech</a></li>
            </ul>
        </li>
        <li class="page dropdown">
            <input class="dropdown-toggle" id="story-toggle" type="checkbox">
            <label class="dropdown-label page-title" for="story-toggle"><a class="dropdown-arrow" href="<?= $path ?>story">Verhaal</a></label>
            <ul class="sections">
                <?php
                $chapters = [
                    "1" => "Hoofdstuk 1 - Forsaken City",
                    "2" => "Hoofdstuk 2 - Old Site",
                    "3" => "Hoofdstuk 3 - Celestial Resort",
                    "4" => "Hoofdstuk 4 - Golden Ridge",
                    "5" => "Hoofdstuk 5 - Mirror Temple",
                    "6" => "Hoofdstuk 6 - Reflection",
                    "7" => "Hoofdstuk 7 - Summit",
                    "8" => "Hoofdstuk 8 - Core",
                    "9" => "Hoofdstuk 9 - Farewell",
                ];
                ?>
                <li class="section"><a href="story">Naar hoofdstuk</a></li>
                <?php
                foreach ($chapters as $chapter => $chapterName) {
                ?>
                    <li class="section"><a href="story#chapter-<?= $chapter ?>"><?= $chapterName ?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li class="page page-title"><a href="<?= $path ?>photo-gallery">Fotogallerij</a></li>
        <li class="page page-title"><a href="<?= $path ?>about-us">Over ons</a></li>
        <li class="page page-title"><a href="<?= $path ?>contact">Contact</a></li>
    </ul>
</nav>