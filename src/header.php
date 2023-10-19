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
            <label class="dropdown-label page-title" for="mechanics-toggle"><a class="dropdown-arrow" href="<?= $path ?>mechanics/index.html">Mechanics</a></label>
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
                <li class="section"><a href="<?= $path ?>mechanics/index.html">Naar pagina</a></li>
                <?php foreach ($chapters as $chapter => $chapterName) : ?>
                    <li class="section dropdown">
                        <a class="dropdown-arrow" href="<?= $path ?>mechanics/index.html#chapter-<?= $chapter ?>"><?= $chapterName ?></a>
                        <ul class="topics">
                            <li class="topic"><a href="<?= $path ?>mechanics/index.html#chapter-<?= $chapter ?>">Naar onderdeel</a></li>
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
            <label class="dropdown-label page-title" for="techniques-toggle"><a class="dropdown-arrow" href="<?= $path ?>techniques/index.html">Technieken</a></label>
            <ul class="sections">
                <li class="section"><a href="<?= $path ?>techniques/index.html#dash-tech">Dash tech</a></li>
                <li class="section"><a href="<?= $path ?>techniques/index.html#dashless-tech">Dashless tech</a></li>
            </ul>
        </li>
        <li class="page dropdown">
            <input class="dropdown-toggle" id="story-toggle" type="checkbox">
            <label class="dropdown-label page-title" for="story-toggle"><a class="dropdown-arrow" href="<?= $path ?>story/index.html">Verhaal</a></label>
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
                <li class="section"><a href="<?= $path ?>story/index.html">Naar pagina</a></li>
                <?php
                foreach ($chapters as $chapter => $chapterName) {
                ?>
                    <li class="section"><a href="<?= $path ?>story/index.html#chapter-<?= $chapter ?>"><?= $chapterName ?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li class="page page-title"><a href="<?= $path ?>photo-gallery/index.html">Fotogallerij</a></li>
        <li class="page page-title"><a href="<?= $path ?>about-us/index.html">Over ons</a></li>
        <li class="page page-title"><a href="<?= $path ?>contact/index.html">Contact</a></li>
    </ul>
</nav>