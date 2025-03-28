<?php

require_once("../autoload.php");

header('Content-Type: application/json; charset=utf-8');

$file = file_get_contents("../assets/data/accreditations.json");
$data = json_decode($file);

if (!isset($_GET['uid'])) {
    header("HTTP/1.0 400 Bad Request");
    die (json_encode([
        "message" => "Le paramètre uid doit être fournis"
    ]));
}

$uid = strtoupper(cleanString($_GET['uid']));

if (!$uid) {
    header("HTTP/1.0 400 Bad Request");
    die (json_encode([
        "message" => "Le paramètre uid ne doit pas être vide."
    ]));
}

$output = array_values(array_filter($data, fn($person) => $person->uid === $uid));

if (count($output)) {
    echo json_encode($output[0]);
}
else {
    header("HTTP/1.0 404 Not Found");
    die (json_encode([
        "message" => "Accréditation non trouvée"
    ]));
}
