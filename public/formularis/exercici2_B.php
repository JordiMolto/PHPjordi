<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercisi 2.B</title>
</head>

<body>
    <form method="get" action="form.php">
        
        Nom:
        <input type="text" name="nom" required><br>
        <label for="start">Data de naixement:</label>
        <input type="date" id="start" name="trip-start" min="2021-09-27"><br>
        
        Sexe:
        <input type="checkbox" id="home" name="home" value="H">
        <label for="home"> Home</label>
        <input type="checkbox" id="dona" name="dona" value="D">
        <label for="dona"> Dona</label>
        <br>
        
        Hobbies:
        <?php $hobbies = array("correr", "saltar", "jugar", "pintar"); ?>
        <select name="hobbies">
            <option value="<?php echo $hobbies[0]; ?>">
            </option>
            <option value="<?php echo $hobbies[1]; ?>">
            </option>
            <option value="<?php echo $hobbies[2]; ?>">
            </option>
            <option value="<?php echo $hobbies[3]; ?>">
            </option>
        </select>
        <br>
        
        Image:
        <input type="file" enctype="multipart/formdata" name="subir-imagen" src="./img" value="Enviar imagen">
        <br>
        <?php echo $_FILES['./img']; ?>
        <input type="submit" value="Enviar">
        <?php

        ?>

</body>

</html>