<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <form>
        <label>Numero: </label>
        <input type="number" name="number1" id="number1"> <br> <br>

        <label>Numero: </label>
        <input type="number" name="number2" id="number2"> <br> <br>

        <label>Numero: </label>
        <input type="number" name="number3" id="number3"> <br> <br>
        <button type="submit">Enviar</button> <br> <br>
    </form>

<?php 
if(isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])) {
    $num = array(
    $_GET['number1'],
    $_GET['number2'],
    $_GET['number3'],
);
$value = 0;
for ($i=0; $i < 3; $i++) {
    if ($num[$i] != 0) { 
        if($num[$i] > 100 && $num[$i] < 200) {
        $value++;
        } 
    } else {
        echo "Número 0 inserido <br> <br>";
    }
}    
echo "Números maiores que 100 e menores que 200:  " . $value; 

}



?>

<br><br> <button><a href="./index.php">Voltar</a></button>
</body>
</html>