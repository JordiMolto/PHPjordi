<?php


namespace App;


abstract class Member
{
    private $name;
    private $birthday;
    private $country;
    private $yellowCards;
    private $redCards;

    /**
     * Player constructor.
     * @param $name
     * @param $birthday
     * @param $country
     * @param $yellowCards
     * @param $redCards
     */
    public function __construct(String $name,String $birthday,String $country,int $yellowCards,int $redCards)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->yellowCards = $yellowCards;
        $this->redCards = $redCards;
    }

    public function age(){
        list($dia,$mes,$anio) = explode("/",$this->birthday);
        $anio_diferencia  = date("Y") - $anio;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $anio_diferencia--;
        return $anio_diferencia;
    }
    
    public function addCard($colorTargeta){
        switch ($colorTargeta) {
            case 'red' : $this->redCards++; break;
            case 'yellow' : $this->yellowCards++; break;
            default: return false;
        }
        return true;
    }

    abstract public function render();

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return String
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * @return mixed
     */
    public function getYellowCards()
    {
        return $this->yellowCards;
    }

    /**
     * @return mixed
     */
    public function getRedCards()
    {
        return $this->redCards;
    }


}