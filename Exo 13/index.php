<?php 

function lookForMin($array) {
    $min = 1000000;
    for($i = 0; $i < count($array); $i++) {
        if($array[$i] < $min) {
            $min = $array[$i];
        }
        else{
            $min = $min;
        }
    }
    echo $min;
}

$arr = [100, 563, 522, 456, 859, 4446, 5, 413, 88, 99];

lookForMin($arr);

?>