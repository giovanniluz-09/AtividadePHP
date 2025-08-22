<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Nome: </label>
        <input placeholder="Coloque seu nome" id="nome" name="nome"> <br> <br>
        <label>Sexo: </label>
        <input placeholder="Coloque seu genero" id="sexo" name="sexo"> <br> <br>
        <label>Idade: </label>
        <input placeholder="Coloque sua idade" id="idade" type="number" name="idade"> <br> <br>
        <button type="submit"> Enviar </button> <br> <br>
    </form>
<?php 
 if(isset($_GET['nome']) && isset($_GET['sexo']) && isset($_GET['idade'])){
    $nome = $_GET['nome'];
    $sexo = $_GET['sexo'];
    $idade = $_GET['idade']; 
}

if($sexo == "feminino" || $sexo == "FEMININO" && $idade < 25) {
    echo $nome . ":  ACEITA";
} else {
    echo $nome . ":  NÃO ACEITA";
}

?>
</body>
</html>