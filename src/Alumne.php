<?php

namespace App;

class queryBuilder
{
    private $dni;
    private $nom;
    private $data;
    private $sexe;
    private $hobby;
    private $foto;

    /**
     * Player constructor.
     * @param $dni
     * @param $nom
     * @param $data
     * @param $sexe
     * @param $hobby
     * @param $foto
     */
    public function __construct(String $dni,String $nom,String $data,int $sexe,String $hobby,int $foto)
    {
        $this->dni = $dni;
        $this->nom = $nom;
        $this->data = $data;
        $this->sexe = $sexe;
        $this->hobby = $hobby;
        $this->foto = $foto;
    }
}
?>