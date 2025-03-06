<?php

require_once("../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Billetterie"
]);

$page->setContentFromFile("../pages/billetterie.html")->render();