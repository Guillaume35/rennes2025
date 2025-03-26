<?php

require_once("../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Boutique"
]);

$page->setContentFromFile("../pages/boutique.html")->render();