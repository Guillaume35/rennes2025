<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Hébergement"
]);

$page->setContentFromFile("../../pages/informations/hebergement.html")->render();