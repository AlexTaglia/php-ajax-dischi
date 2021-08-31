<?php 

require_once __DIR__ . "/../database/dischi.php";

if(!empty($_GET["genre"])){
    $genre = $_GET["genre"];
} else {
    $genre = "";
}

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