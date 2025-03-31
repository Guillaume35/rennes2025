<?php

require_once("../autoload.php");

header('Content-Type: application/json; charset=utf-8');

$file = file_get_contents("../assets/data/affiliations.json");
$data = json_decode($file);

$output = $data;

if (isset($_GET['type'])) {
    $output = array_filter($output, fn($var) => trim($_GET['type']) == $var->type);
}

echo json_encode(array_values($output));