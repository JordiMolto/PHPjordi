<?php

namespace App;

class queryBuilder
{
    private $tabla;
        public function($tabla){
            //$pdoSt es pdoStatement
            $pdoSt = $this->conn->prepare("SELECT * FROM $tabla");
            return $pdoSt->execute();
        }
}
?>