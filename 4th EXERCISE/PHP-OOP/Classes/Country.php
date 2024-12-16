<?php

class Country{
    private string $nation;

    private array $clubs;
    private array $players;

    //IMPO CONSTRUCT 

    public function __construct(string $nation) {
        $this -> nation = $nation;
        $this -> clubs = [];
        $this -> players = [];
    }

    


    // IMPO GETTERS AND SETTERS 

    public function getNation(): string
    {
        return $this->nation;
    }
 
    public function setNation(string $nation)
    {
        $this->nation = $nation;

        return $this;
    }


    //IMPO FUNCTION 


    public function __toString(){
        return $this->nation;
    }



    public function addPlayer(Player $player){
        $this-> players[] = $player;
    }


    
    public function addClub(Club $club){
        $this-> clubs[] = $club;
    }



    public function numClubs(){
        $result = count($this -> clubs);

        return $result;
    }



    public function numPlayers(){
        $result = count($this -> players);

        return $result;
    }


    

    public function countryInfo(){
        $result = 
        "<h1> ". $this -> getNation(). "</h1>" ;

        $result .= "<h3>The clubs : </h3>";
        foreach($this -> clubs as $club ){
            $result .= 
            $club -> getName(). " - ".
            $club -> getCreationDate(). "<br>". "<br>". "<br>";
        }

        return $result;
    }
}