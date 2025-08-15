<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Numero: </label>
        <input type="number" name="number" id="number"/>
        <button type="submit">Enviar</button>
    </form>
<?php 
if(isset($_GET['number'])){
    $num1 = $_GET['number'];
}

switch ($variable) {
    case 'value':
        # code...
        break;
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

?>
</body>
</html>