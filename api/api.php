<?php
require_once __DIR__ . "/../database/database.php";
$gen = $_GET["gen"];
if ($gen === "all") {
    $discs = $database;
} else {
    $discs = [];
    foreach ($database as $disc) {  
        if($gen === $disc['genre']) {
            $discs[] = $disc;
        };
    };
};


header('Content-Type: application/json');
echo json_encode($discs);