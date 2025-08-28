<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    <form>
        <label>Numero: </label>
        <input type="number" name="number" id="number">
        <button type="submit">Enviar</button> <br> <br>
    </form>

<?php 
if(isset($_GET['number'])) {
    $num = $_GET['number'];
    $produto = 1;

    echo 'Resultado: ';

    for ($i=1; $i <= $num; $i++) { 
        echo $i . " ";
        $produto *= $i;
    }
    
    echo "= $produto";
    
}

?>
<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>