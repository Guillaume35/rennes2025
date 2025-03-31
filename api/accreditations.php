<?php

require_once("../autoload.php");

header('Content-Type: application/json; charset=utf-8');

$file = file_get_contents("../assets/data/accreditations.json");
$data = json_decode($file);

$output = $data;

if (isset($_GET['affiliation'])) {
    $output = array_filter($output, fn($var) => in_array(trim($_GET['affiliation']), $var->affiliations));
}

if (isset($_GET['name'])) {
    $output = array_filter($output, fn($var) => cleanString($var->name) === cleanString($_GET['name']));
}

if (isset($_GET['role'])) {
    $output = array_filter($output, fn($var) => in_array(trim($_GET['role']), $var->roles));
}


echo json_encode(array_values($output));