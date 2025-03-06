<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Restauration"
]);

$page->setContentFromFile("../../pages/informations/restauration.html")->render();