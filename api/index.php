<?php
require __DIR__ . "/../partials/data.php";
header("Content-Type:application/json");

if(!empty($_GET['genre'])){
    $genre = $_GET['genre'];
    $dbFiltered = [];

    foreach($database as $album){
        if($genre == $album['genre']){
            $dbFiltered[] = $album; 
        }
    }
    echo json_encode($dbFiltered);
}else{
    echo json_encode($database);
}