<?php

require_once "classes/mechanic.php";

ob_start();
require "pages/mechanics.php";

file_put_contents("dist/mechanics/index.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/contact.php";

file_put_contents("dist/contact/index.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/over-ons.php";

file_put_contents("dist/over-ons/index.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/photo-gallery.php";

file_put_contents("dist/photo-gallery/index.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/story.php";

file_put_contents("dist/story/index.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/techniques.php";

file_put_contents("dist/techniques/index.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/home.php";

file_put_contents("dist/index.html", ob_get_contents());
ob_end_clean();

foreach ($mechanics as $mechanic) {
    ob_start();
    require "pages/mechanic.php";
    file_put_contents("dist/mechanics/mechanic/{$mechanic->name}.html", ob_get_contents());
    ob_end_clean();
}
