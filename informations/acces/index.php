<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Accès"
]);

$page->setContentFromFile("../../pages/informations/acces.html")->render();