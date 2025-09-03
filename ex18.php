<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18</title>
</head>
<body>

<?php 
$vetor1 = array(rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40));
$vetor2 = array(rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40), rand(1, 40));

for ($i=0; $i < 10; $i++) { 
    echo $vetor1[$i] . ", ";
} 

echo '<br>';

for ($i=0; $i < 10; $i++) { 
    echo $vetor2[$i] . ", ";
}

echo '<br> <br>';

$naocomum = [];

foreach ($vetor1 as $value) {
    if (!in_array($value, $vetor2)) {
        $naocomum[] = $value;
    }
}

foreach ($vetor2 as $value) {
    if (!in_array($value, $vetor1) && !in_array($value, $naocomum)) {
        $naocomum[] = $value;
    }
}

echo 'Numeros não comuns: ' . implode(', ', $naocomum);
?>

<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>