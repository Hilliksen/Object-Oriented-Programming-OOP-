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

    public function addClub(Club $club){
        $this-> clubs[] = $club;
    }
    

}