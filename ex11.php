<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>
    <form>
        <label>Numero: </label>
        <input type="number" name="num" id="num"> <br> <br>
        <button type="submit">Enviar</button> <br> <br>
    </form>

<?php 
if(isset($_GET['num'])) {
    $num = $_GET['num'];

    for ($i=1; $i <= 10; $i++) { 
        echo "$num x $i = " . $num * $i . "<br>";
    }
}



?>
<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>