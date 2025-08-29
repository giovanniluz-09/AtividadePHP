<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
<?php 
$num = array(rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100),
             rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100),
             rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), 
             rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), );




$maior = max($num);
$menor = min($num);

$porcentagem = 0;

for ($i=0; $i < 20; $i++) { 
    echo $num[$i] . "  ";
}


for ($i=0; $i < 20; $i++) { 
    if($num[$i] % 2 == 0) {
        $porcentagem++;
    }
}


$average = array_sum($num) / 20;

echo "<br> <br> Maior numero: " . $maior . "<br>";
echo "Menor numero: " . $menor . "<br> <br>";
echo $porcentagem / 20 * 100 . "% são pares <br> <br>";
echo "Media: " . $average;



?>

<br><br> <button><a href="./index.php">Voltar</a></button>
</body>
</html>