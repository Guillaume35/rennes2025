<?php

require_once("../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Un succès à Rennes pour la troisième étape du Championnat de France de artistique mini à cadet",
    "structure" => "structure-no-menu.php"
]);

$page->setContentFromFile("../pages/bilan.html")->render();