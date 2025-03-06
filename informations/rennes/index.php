<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Rennes & tourisme"
]);

$page->setContentFromFile("../../pages/informations/rennes.html")->render();