<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <form>
        <label>Numero:  </label>
        <input type="number3" name="num1" id=""> <br> <br>
        
        <label>Numero:  </label>
        <input type="number" name="num2" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num3" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num4" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num5" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num6" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num7" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num8" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num9" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num10" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num11" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num12" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num13" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num14" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num15" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num16" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num17" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num18" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num19" id=""> <br> <br>

        <label>Numero:  </label>
        <input type="number" name="num20" id=""> <br> <br>

        <button type="submit">Enviar</button> <br> <br>
    </form>

<?php 
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']) && isset($_GET['num4']) && isset($_GET['num5']) && isset($_GET['num6']) && isset($_GET['num7']) && isset($_GET['num8']) && isset($_GET['num9']) && isset($_GET['num10']) && isset($_GET['num11']) && isset($_GET['num12']) && isset($_GET['num13']) && isset($_GET['num14']) && isset($_GET['num15']) && isset($_GET['num16']) && isset($_GET['num17']) && isset($_GET['num18']) && isset($_GET['num19']) && isset($_GET['num20'])) {
    $num = array(
    $_GET['num1'], 
    $_GET['num2'],
    $_GET['num3'],
    $_GET['num4'],
    $_GET['num5'],
    $_GET['num6'],
    $_GET['num7'],
    $_GET['num8'],
    $_GET['num9'],
    $_GET['num10'],
    $_GET['num11'],
    $_GET['num12'],
    $_GET['num13'],
    $_GET['num14'],
    $_GET['num15'],
    $_GET['num16'],
    $_GET['num17'],
    $_GET['num18'],
    $_GET['num19'],
    $_GET['num20'],
);
$positivos = 0;
$value = 0;
$negativos = 0;

for ($i=0; $i < 20; $i++) { 
    $value = $num[$i];
    if($num[$i] >= 0) {
            $positivos += $value;
        } else {
            $negativos++;
        }
    }
echo "Soma dos Positivos: $positivos" . "<br> <br>"; 
echo "Quantidade de Negativos: $negativos";
}
?>

<br><br><button><a href="./index.php">Voltar</a></button>
</body>
</html>