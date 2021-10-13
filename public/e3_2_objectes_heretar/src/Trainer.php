<?php


namespace App;


class Trainer extends Member
{
    private $charge;

    /**
     * Player constructor.
     * @param $name
     * @param $birthday
     * @param $country
     * @param $dorsal
     * @param $position
     * @param $goals
     * @param $matches
     * @param $minutes
     * @param $yellowCards
     * @param $redCards
     */
    public function __construct(String $name,String $birthday,String $country,String $charge,int $yellowCards=null ,int $redCards=null)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->yellowCards = $yellowCards??0;
        $this->redCards = $redCards??0;
    }
    
    public function render(){
        loadView('trainerCard',['player' => $this]);
    }

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
    public function getDorsal()
    {
        return $this->dorsal;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @return mixed
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * @return mixed
     */
    public function getMinutes()
    {
        return $this->minutes;
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