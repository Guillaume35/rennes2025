<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "La piste"
]);

$page->setContentFromFile("../../pages/competition/piste.html")->render();