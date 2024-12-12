<?php

class Club {
    private string $name; 
    private DateTime $creationDate;
    private array $players;  //IMPO YOU NEED CAREER Attribute HERE
    private Country $country;

    //IMPO CONTRUCT 

    public function __construct(string $name, string $creationDate) {
        $this -> name = $name;
        $this -> creationDate = new DateTime $creationDate;
        $this -> players = [];
        $this -> country = addCountry($this);
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

    public function addPlayer(Player $player){
        $this-> players[] = $player;
    }
}