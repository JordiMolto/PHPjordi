<?php
require_once ('../../kernel.php');
require_once ('../../myHelpers/myHelpers.php');
$hobbies = ['Videojuegos','Futbol','Baloncesto','Tenis','Leer','Buscar Gamusinos'];
$errors=[];

if (isPost() && cfsr()) {
    // validació camps
    $name = isRequired('name', $errors);
    $data = isBefore('data', $errors);
    $hobby = $_POST['hobby'];
    $genre = $_POST['genre'];
    $fitxer = saveFile('image','image/png','./fotos',$errors);

    if (!count($errors)){
        loadView('resFormulario',compact('name','data','hobby','genre','fitxer','hobbies'));
        die();
    }
}
//loadView('resFormulario',compact('name','data','hobby','genre','fitxer','hobbies'));
extract(compact('hobbies','errors'));
require_once('../views/resFormulario.view.php');

