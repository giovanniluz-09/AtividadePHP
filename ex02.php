<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form>
        <label>Numero: </label>
        <input type="number" value=0 name="number" id="number"/>
        <button type="submit">Enviar</button> <br> <br>
    </form>
<?php 
$num1 = 0;
if(isset($_GET['number'])){
    $num1 = $_GET['number'];
}

if($num1 % 10 == 0 && $num1 % 5 == 0 && $num1 % 2 == 0 && $num1 != 0 ) {

    echo "O valor é divisivel por 10, 5 e 2";
   } else if ($num1 % 2 == 0 && $num1 != 0) {
    echo "O valor é divisivel por 2";
   } else if ($num1 % 5 == 0 && $num1 != 0) {
    echo "O valor é divisivel por 5";
   } else {
    echo "O valor não é divisivel ou  não pode ser dividido por nenhuma das opções";
   }
?>
<br> <br> <button><a href="./index.php">Voltar</a></button>
</body>
</html>