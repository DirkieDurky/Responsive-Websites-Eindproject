<?php

require_once "classes/mechanic.php";

ob_start();
require "pages/mechanics.php";

file_put_contents("output/mechanics/index.html", ob_get_contents());
ob_end_clean();
