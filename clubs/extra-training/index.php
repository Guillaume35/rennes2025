<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Extra-training"
]);

$page->setContentFromFile("../../pages/clubs/extra-training.html")->render();