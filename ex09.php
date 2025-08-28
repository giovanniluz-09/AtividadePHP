<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <form>
        <label>Insira um valor: </label>
        <input type="number" name="number" id="number">
        <button type="submit">Enviar</button> <br> <br>
    </form>

<?php 
if(isset($_GET['number'])) {
    $num = $_GET['number'];

    for ($i=0; $i < $num; $i++) { 
        echo "SOL ";
    }
}


?>

<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>