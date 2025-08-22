<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form>
    <label> Numero 1: </label> 
    <input type="number" name="number1" id="number1" placeholder="Escolha um número" />
    <br> <br>
    <label> Numero 2: </label>
    <input type="number" name="number2" id="number2" placeholder="Escolha um número" />
    <button type="submit">Enviar</button> <br> <br>
</form>
<?php 
 if(isset($_GET['number1']) && isset($_GET['number2'])){
     $num1 = $_GET['number1'];
     $num2 = $_GET['number2'];
     
     $sum = $num1 + $num2;
     
     if($sum > 20) {
         echo "Resultado: " . $sum += 8;
     } else {
         echo "Resultado: " . $sum -= 5;
     }
    }
    ?>
    <br> <br> <button><a href="./index.php">Voltar</a></button>
</body>
</html>

