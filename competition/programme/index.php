<?php

require_once("../../autoload.php");

use App\Page;

$schedule_content = file_get_contents("../../assets/schedule.json");
$schedule = json_decode($schedule_content);

$html = [];

foreach ($schedule as $day) {

    $list = [];

    foreach ($day->events as $event) {
        $class_name = "text-secondary";
        if ($event->type == "competition") $class_name = "text-primary";
        if ($event->type == "award") $class_name = "bg-gradient-gold";

        $body = [];
        $title = "";
        if ($event->type == "competition") $title = "Compétition";
        if ($event->type == "award") $title = "PODIUMS";
        if ($event->type == "training") $title = "Entraînements officiels";
        if ($title) $body[] = "<strong>{$title}</strong>";

        if (isset($event->label) && $event->label) $body[] = $event->label;
        if ($event->type == "open") $body[] = "Ouverture";
        if ($event->type == "end") $body[] = "Fin de session";

        $content = implode("<br>", $body);

        $final = isset($event->final) && $event->final ? '<span class="schedule-final"></span>' : '';
        $time = isset($event->time) ? $event->time : "";

        $list[] = "<tr class=\"{$class_name}\">
            <td>
                {$time}
            </td>
            <td>
                {$content}
            </td>
            <td class=\"text-end\">
                {$final}
            </td>
        </tr>";
    }

    $content = implode("", $list);

    $html[] = "<h2 class=\"text-primary-blue\">{$day->day}</h2>
    <div class=\"schedule-table-container\">
        <table class=\"schedule-table\">
            <thead class=\"schedule-header\">
                <tr>
                    <th></th>
                    <th style=\"width:100%;\">Événement</th>
                    <th>Finale</th>
                </tr>
            </thead>

            <tbody>
                {$content}
            </tbody>
        </table>
    </div>";
}

$content = implode("", $html);

$page = new Page([
    "title" => "Programme",
    "variables" => [
        "schedule" => $content
    ]
]);

$page->setContentFromFile("../../pages/competition/programme.html")->render();