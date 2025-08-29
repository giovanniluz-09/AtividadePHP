<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>
    <p>Chico tem 1,50 m e cresce 2 cm por ano</p>
    <p>Juca tem 1,10 m e cresce 3 cm por ano</p>

<?php
$chico = 1.50;
$juca = 1.10;
$crescimento_juca = 0.03;
$crescimento_chico = 0.02;
$ano = 0;

while ($juca < $chico) {
    $juca += $crescimento_juca;
    $chico += $crescimento_chico;
    $ano++;
}

echo "Quantidade de Anos para Juca chegar na altura Chico: " . $ano;
?>    

<br> <br> <button><a href="./index.php">Voltar</a></button>
</body>
</html>