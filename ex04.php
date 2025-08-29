<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form>
        <label> Numero 1: </label>
        <input type="number" name="number1" id="number1" placeholder="Insira um valor"> <br> <br>
        
        <label> Numero 2: </label>
        <input type="number" name="number2" id="number2" placeholder="Insira um valor"> <br> <br>
        
        <label> Numero 3: </label>        
        <input type="number" name="number3" id="number3" placeholder="Insira um valor"> <br> <br>
        
        <button type="submit">Enviar</button> <br> <br>
    </form>

<?php 
 if(isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])) {
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];
    $num3 = $_GET['number3'];
    
    $numbers =  array($num1, $num2, $num3);
    arsort($numbers);
    
    echo "Resultado: ";
    
    foreach ($numbers as $value) {
        echo " $value";
    }

    }

        
        
?>
<br><br><button><a href="index.php">Voltar</a></button>
</body>
</html>