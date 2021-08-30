<?php
$gen = $_GET["gen"];
require_once __DIR__ . "/../database/database.php";
if ($gen == "all") {
    $discs = $database;
} else {
    $discs = [];
    foreach ($database as $disc) {  
        if($gen == $disc['genre']) {
            $discs[] = $disc;
        };
    };
};


header('Content-Type: application/json');
echo json_encode($database);