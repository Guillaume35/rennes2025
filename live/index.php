<?php

require_once("../autoload.php");

use App\Page;

$page = new Page([
    "title" => "En direct"
]);

$page->setContentFromFile("../pages/live.html")->render();