<?php 

require_once __DIR__ . "/../database/dischi.php";

header('Content-Type: application/json');  
echo json_encode($dischi);      
