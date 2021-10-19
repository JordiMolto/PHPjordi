<?php

namespace App;

class queryBuilder
{
    private $conn;

    /**
        * Player constructor.
        * @param $conn
    */

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function tornarElements($tabla){
            //$pdoSt es pdoStatement
            //$pdoSt = $this->conn->prepare("SELECT * FROM ::tabla");
            //$pdoSt->conn->prepare(":tabla", $tabla);
            $pdoSt = $this->conn->prepare("SELECT * FROM $tabla");
            $pdoSt->execute();
            return $pdoSt;
        }

    public function insert($nomTaula,$arrayCamps){
        $arrayCampsName = implode(",",array_keys($arrayCamps));
        $arrayCampsValue = implode("','",$arrayCamps);
        $sql= "INSERT INTO %s (%s) VALUES ('%s')";
        //sprintf passa els valors per les %s i per lo tant, crea el sql ben fet.
        $sqlBo = sprintf($sql,$nomTaula,$arrayCampsName,$arrayCampsValue);
        $pdoSt = $this->conn->prepare($sqlBo);
            $pdoSt->execute();
            return $pdoSt;
        }

    public function deleteById($nomTaula,$id){
        $sql= "DELETE FROM $nomTaula WHERE dni = '$id'";
        $pdoSt = $this->conn->prepare($sql);
            $pdoSt->execute();
            return $pdoSt;
        }
        
}
