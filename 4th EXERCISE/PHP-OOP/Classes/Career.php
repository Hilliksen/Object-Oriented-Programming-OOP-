<?php

class Career{
    
    //IMPO ATTRIBUTES 

    private Club $club;

    private Player $player;

    private int $years;
    
    
    //IMPO CONSTRUCT 
    public function __construct(Club $club, Player $player, int $years) {
        $this -> club = $club;
        $this -> player = $player;
        $this -> years = $years;
        $this -> club -> addCareer($this);
        $this -> player -> addCareer($this);
    }

    //IMPO GETTERS AND SETTERS 

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
   
    public function getPlayer() 
    {
        return $this->player;
    }


    
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

     



    //* ------------------------------------------- *//

    public function getYears() : int 
    {
        return $this->years;
    }

    
    public function setYears($years)
    {
        $this->years = $years;

        return $this;
    }

    
    //IMPO FUNCTIONS 

    public function lenghtCareer(){
        $result = $this -> getYears();
        return $result; 
    }

    public function __toString(){
        return $this->club;
    }
    
    public function  numPlayers(){
        $this -> count($careers);
    }
   
    

}