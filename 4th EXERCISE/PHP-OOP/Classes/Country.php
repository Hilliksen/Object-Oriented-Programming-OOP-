<?php

class Country{
    private string $nation;
    // private Club $club; 
    private array $clubs;
    private array $players;

    //IMPO CONSTRUCT 

    public function __construct(string $nation, /*Club $club*/ ) {
        $this -> nation = $nation;
        // $this -> club = $club;
        $this -> clubs = [];
        $this -> players = [];
    }

    


    // IMPO GETTERS AND SETTERS 

    public function getNation()
    {
        return $this->nation;
    }
 
    public function setNation($nation)
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
        // $result = 
        // "Country : ". $this -> getNation(). "<br>" . 
        // "Number of clubs : " . $this -> numClubs() . "<br>".  
        // "Number of players : ". $this -> numPlayers();

        $result = 
        "<h2> ". $this -> getNation(). "</h2>";
        foreach($this -> clubs as $club ){
        "<p>".
            $result .= 
            $club -> getName(). 
            $club -> getCreationDate() -> format ("Y").

        "</p>";

        }


        return $result;
    }
}