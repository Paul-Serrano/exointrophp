<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver le bon numéro !</title>
</head>

<body>
    <form action="">
        <input type="text">
        <button onclick="" type="button"></button>
    </form>
</body>
<script>

</script>

</html>
<?php 

function randomizer($n) {
    $t = rand(0, 1000);
    if($n == $t) {
        echo "Félicitations !";
    }
    else {
        if($n < $t) {

        }
    }
}

?>