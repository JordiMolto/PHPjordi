<?php

function dd(...$variable){
    var_dump(...$variable);
    die();
}

function calculator(){
    return;
}

function sumar($a, $b){
    return $a+$b;
}
function restar($a, $b){
    return $a-$b;
}

function isRequired($camp,&$errors){
    if(empty($_POST[$camp])){
        
    }
}
?>