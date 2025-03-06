<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Accréditations"
]);

$page->setContentFromFile("../../pages/clubs/accreditations.html")->render();