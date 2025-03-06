<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Programme"
]);

$page->setContentFromFile("../../pages/competition/programme.html")->render();