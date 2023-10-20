<?php
require_once "classes/mechanic.php";
require_once "classes/technique.php";
require_once "classes/Lorem.php";

$depth = 0;

ob_start();
require "pages/home.php";
file_put_contents("dist/index.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/mechanics.php";
file_put_contents("dist/mechanics.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/contact.php";
file_put_contents("dist/contact.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/about-us.php";
file_put_contents("dist/about-us.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/photo-gallery.php";
file_put_contents("dist/photo-gallery.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/story.php";
file_put_contents("dist/story.html", ob_get_contents());
ob_end_clean();

ob_start();
require "pages/techniques.php";
file_put_contents("dist/techniques.html", ob_get_contents());
ob_end_clean();

$depth = 1;

foreach ($mechanics as $mechanic) {
    ob_start();
    require "pages/mechanic.php";
    file_put_contents("dist/mechanics/{$mechanic->title}.html", ob_get_contents());
    ob_end_clean();
}

foreach ($techniques as $technique) {
    ob_start();
    require "pages/technique.php";
    file_put_contents("dist/techniques/{$technique->title}.html", ob_get_contents());
    ob_end_clean();
}
