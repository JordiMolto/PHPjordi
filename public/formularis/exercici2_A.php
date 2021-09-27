<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercisi 2.A</title>
</head>
<body>
<form method="get" action="calculadora.php">
        <input type="text" name="operando1">
        <select name="operador">
            <option value="+">+
            </option>
            <option value="-">-
            </option>
            <option value="*">*
            </option>
            <option value="/">/
            </option>
        </select>
        <input type="text" name="operando2">
        <input type="submit" value="enviar">
    <?php
    include './calculadora.php';

    ?>

</body>
</html>




