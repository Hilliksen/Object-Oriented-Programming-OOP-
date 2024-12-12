<?php

class Club {
    private string $name; 
    private DateTime $creationDate;
    private Country $country;
    private array $careers;

    //IMPO CONTRUCT 

    public function __construct(string $name, string $creationDate, Country $country) {
        $this -> name = $name;
        $this -> creationDate = new DateTime ($creationDate);
        $this -> country = $country;
        $this -> country -> addClub($this);
        $this -> careers = [];
    }   
    //IMPO GETTERS AND SETTERS 

    public function getName()
    {
        return $this->name;
    }

   
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }





    //* ------------------------------------------- *// 
 
    public function getCreationDate()
    {
        return $this->creationDate;
    }

   
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    



    //* ------------------------------------------- *// 

    public function getPlayers()
    {
        return $this->players;
    }

   
    

    public function setPlayers($players)
    {
        $this->players = $players;

        return $this;
    }





    //* ------------------------------------------- *// 


    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }


    //IMPO FUNCTIONS

    public function addCareer(Career $career){
        $this -> careers[] = $career;
    }
}