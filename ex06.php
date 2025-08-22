<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Mês: </label>
        <input type="number" name="number" id="number">
        <button type="submit">Enviar</button> <br> <br>
    </form>

<?php 
if(isset($_GET['number'])) {
    $num = $_GET['number'];

    switch ($num) {
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Maio";
            break;
        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";    
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;
        
        default:
            echo "Não existe um mês com esse número";
            break;
    }
}

?>
<br> <br> <button><a href="./index.php">Voltar</a></button>
</body>
</html>