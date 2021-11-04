<?php 

function estPair($n) {
    if($n % 2 == 0) {
        echo $n , " est un nombre pair <br>";
    }
    else {
        echo $n, " est un nombre impair <br>";
    }
}

estPair(6);
estPair(7);


?>