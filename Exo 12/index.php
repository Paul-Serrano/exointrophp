<?php



function show($array) {
    for($i = 0; $i < count($array); $i++) {
        if($i < count($array) - 1) {
            echo $array[$i], ", ";
        }
        else {
            echo $array[$i];
        }
        
    }
}

$actor = ["Pitt", "Clooney", "Damon", "Chealdey", "Liotta", "Close"];

show($actor);

?>