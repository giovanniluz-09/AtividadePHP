<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exrcicio 5</title>
</head>
<body>
    <form>
        <label>Numero 1: </label>
        <input type="number" name="number1" id="number1"> <br> <br>
        <label>Numero 2: </label>
        <input type="number" name="number2" id="number2"> <br> <br>
        <label>Numero 3: </label>
        <input type="number" name="number3" id="number3"> <br> <br>
        <button type="submit">Enviar</button> <br> <br>
    </form>

<?php 
if(isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])) {
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];
    $num3 = $_GET['number3'];

    if($num1 == $num2 && $num2 == $num3) {
        echo "Triângulo Equilátero";

    } else if ($num1 == $num2 && $num1 != $num3 ||   $num1 == $num3 && $num1 != $num2 ||   $num2 == $num3 && $num2 != $num1) {
        echo "Triângulo Isósceles";

    } else {
       echo "Triângulo Escaleno";
    }
}

    
?>

<br> <br> <button><a href="./index.php">Voltar</a></button>
</body>
</html>