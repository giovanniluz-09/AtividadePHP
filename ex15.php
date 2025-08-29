<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15</title>
</head>
<body>
    <form>
        <label>Massa Inicial: </label>
        <input type="number" name="inicial" id="inicial"> 
        
        <button type="submit">Enviar</button> <br> <br>
    </form>
<?php 

if(isset($_GET['inicial'])) {
    $inicial = $_GET['inicial'];
    $tempo = 0;

    while ($inicial > 0.10) {
        $inicial *= 0.50;
        $tempo++;
    }

echo "Quantida de tempo que precisa para chegar a 0.1 é de: " . $tempo . " minutos";
}

?>

<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>