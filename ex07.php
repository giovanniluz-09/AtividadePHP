<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
<form>
    <label>Titulo do Livro: </label>
    <input name='book' id='book'> <br> <br>

    <label>Tipo de Usuário: </label>
    <input name="user" id='user' placeholder="professor ou aluno"> <br> <br>
    <button type="submit">Enviar</button> <br> <br>
</form>

<?php 

if(isset($_GET['book']) && isset($_GET['user'])) {
    $book = $_GET['book'];
    $user = $_GET['user'];

    switch ($user) {
        case "professor":
            echo "Você tem 10 dias para devolver o livro " . $book;
            break;
        case "aluno":
            echo "Você tem 3 dias para devolver o livro " . $book;
            break;
        
        default:
            echo 'Coloque um tipo de usuário adequado';
            break;
    }
}


?>

<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>