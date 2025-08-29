<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>

<?php
$num = array(rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand());


for ($i=0; $i < 15; $i++) { 
    if($num[$i] % 2 == 0) {
        echo "Numero Par: " . $num[$i] . "<br> <br>";
    } else {
        echo "Numero Impar: " . $num[$i] . "<br> <br>";
    }
}


?>

<button><a href="./index.php">Voltar</a></button>
</body>
</html>