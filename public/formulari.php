<?php
require_once("../kernel.php");
$greetings='Formulari';

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    if(parse_url($_SERVER['HTTP_REFERER']))
    echo $_POST ['email'];
} else {
    require_once("./views/formulari.view.php");
}
?>