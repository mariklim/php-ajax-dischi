<?php
require __DIR__ . "/../partials/data.php";
header("Content-Type:application/json");


if(!empty($_GET['genre'])){

    //salvo info che arriverà in GET in una var
    $genre = $_GET['genre'];
    //creo un ARR per album filtrati
    $dbFiltered = [];
   

    //ciclo su file JSON
    foreach($database as $album){

        //se il valore del GET è uguale al valore genre del file con i dati
        if($genre == $album['genre']){

            //allora "filtro" file con i dati e il risultato salvo in Arr che ho creato prima ($dbFiltered)
            $dbFiltered[] = $album; 
        }
    }
    //se c'e' qualcosa che arriva in GET allora "trasformo" il file filtrato con i dati in file JSON
    echo json_encode($dbFiltered);
}else{
    //altrimenti "trasformo" il file originale con i dati in file JSON
    echo json_encode($database);
}