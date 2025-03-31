<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Espace presse"
]);

$page->setContentFromFile("../../pages/competition/presse.html")->render();