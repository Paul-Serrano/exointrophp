<?php

function lookForMin($array) {
    $min = 1000000;
    $newarray = [];
    array_push($newarray, $array[$i]);
    for($i = 1; $i < count($array); $i++) {        
        if($array[$i + 1] < $array[$i]) {
            ;
        }
        else{
            $min = $min;
        }
    }
    echo $newarray;
}

?>