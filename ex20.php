<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 20</title>
</head>
<body>
<?php
        $matriz = [];
        $matrizPares = [];
        $matrizImpares = [];
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $num = rand(1, 99);
                $matriz[$i][$j] = $num;
                $matrizPares[$i][$j] = ($num % 2 == 0) ? $num : '-';
                $matrizImpares[$i][$j] = ($num % 2 != 0) ? $num : '-';
            }
        }
        function imprimirMatriz($matriz, $titulo) {
            echo "<h2>" . $titulo . "</h2><table>";
            for ($i = 0; $i < 5; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 5; $j++) {
                    echo "<td>" . $matriz[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        echo "<div class='result'>";
        imprimirMatriz($matriz, "Matriz Original");
        imprimirMatriz($matrizPares, "Matriz Apenas com Pares");
        imprimirMatriz($matrizImpares, "Matriz Apenas com Ímpares");
        echo "</div>";
        ?>

<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>