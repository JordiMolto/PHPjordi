<!DOCTYPE html>
<html lang="en">

<head>
    <title>calculadora</title>
</head>

<body>

        <?php
        $operando1 = $_GET['operando1'];
        $operando2 = $_GET['operando2'];
        $operador = $_GET['operador'];

        if ($operador == "+") {
            $solucion = $operando1 + $operando2;
        } else if ($operador == "-") {
            $solucion = $operando1 - $operando2;
        } else if ($operador == "*") {
            $solucion = $operando1 * $operando2;
        } else if ($operador == "/") {
            $solucion = $operando1 / $operando2;
        }
        echo "La sol.lució és: " . $solucion;
        
        ?>
    </form>
</body>

</html>