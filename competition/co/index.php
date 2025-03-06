<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Le comité d'organisation"
]);

$page->setContentFromFile("../../pages/competition/co.html")->render();