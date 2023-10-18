<?php

require_once "classes/mechanic.php";

ob_start();
require "pages/mechanics.php";

file_put_contents("dist/mechanics/index.html", ob_get_contents());
ob_end_clean();

foreach ($mechanics as $mechanic) {
    ob_start();
    require "pages/mechanic.php";
    file_put_contents("dist/mechanics/mechanic/{$mechanic->name}.html", ob_get_contents());
    ob_end_clean();
}
