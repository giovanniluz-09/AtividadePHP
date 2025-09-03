<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19</title>
</head>
<body>
<?php
    $matriz = [];
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $matriz[$i][$j] = rand(1, 99);
            }
        }
        echo "<h2>Matriz 5x5</h2><table>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                echo "<td>" . $matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<div><h2>Elementos da Diagonal Principal:</h2><p>";
        $diagonal = [];
        for ($i = 0; $i < 5; $i++) {
            $diagonal[] = $matriz[$i][$i];
        }
        echo implode(", ", $diagonal);
        echo "</p></div>";
?>

<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>