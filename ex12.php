<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
    <form>
        <label>Palavra: </label>
        <input type="text" name="word"> <br> <br>
        <button type="submit">Enviar</button>
    </form>

<?php
if (isset($_GET['word'])) {
    $word = $_GET['word'];


    for ($i=0; $i < 5; $i++) { 
        echo str_repeat($word, $i) . "<br>";
    }
}


?>
</body>
</html>