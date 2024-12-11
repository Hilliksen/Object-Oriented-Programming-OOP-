<?php

class Country{
    private string $nation;
    private Club $club; 
    private array $clubs 

    //IMPO CONSTRUCT 

    public function __construct(string $nation, Club $club) {
        $this -> nation = $nation;
        $this -> club = $club;
        $this -> clubs = [];
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

    




    //* ------------------------------------------- *// 


    public function getClub()
    {
        return $this->club;
    }

    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }





    //* ------------------------------------------- *// 
 
    public function getClubs()
    {
        return $this->clubs;
    }

    
    public function setClubs($clubs)
    {
        $this->clubs = $clubs;

        return $this;
    }
}