<?php 

require_once __DIR__ . "/../database/dischi.php";

$genre = $_GET["genre"];

$genreArray = array_filter($dischi, function($item) use ($genre) {
    return $item["genre"] === $genre;
});

// var_dump($genre);
// var_dump($genreArray);
// var_dump($dischi);


// header('Content-Type: application/json');  
// echo json_encode($dischi);      

header('Content-Type: application/json');  
echo json_encode($genreArray);    
