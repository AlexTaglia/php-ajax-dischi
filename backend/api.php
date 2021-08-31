<?php 

require_once __DIR__ . "/../database/dischi.php";

$genre = $_GET["genre"];

if($genre){
    
    $genreArray = array_filter($dischi, function($item) use ($genre) {
        return $item["genre"] === $genre;
    });

    header('Content-Type: application/json');  
    echo json_encode($genreArray);    

} else {

    header('Content-Type: application/json');  
    echo json_encode($dischi);      
}