<?php

class Career{
    
    //IMPO ATTRIBUTES 

    private Club $club;

    private Player $player;

    private int $years;
    
    private DateTime $enter;
    
    
    //IMPO CONSTRUCT 
    public function __construct(Club $club, Player $player, int $years, string $enter) {
        $this -> club = $club;
        $this -> player = $player;
        $this -> years = $years;
        $this -> enter = new DateTime ($enter);
        $this -> club -> addCareer($this);
        $this -> player -> addCareer($this);
    }

    //IMPO GETTERS AND SETTERS 

    public function getClub(): Club  
    {
        return $this->club;
    }

   
    public function setClub( Club $club)
    {
        $this->club = $club;

        return $this;
    }





    //* ------------------------------------------- *//
   
    public function getPlayer() :  Player 
    {
        return $this->player;
    }


    
    public function setPlayer( Player $player)
    {
        $this->player = $player;

        return $this;
    }

     



    //* ------------------------------------------- *//

    public function getYears() : int 
    {
        return $this->years;
    }

    
    public function setYears(int $years)
    {
        $this->years = $years;

        return $this;
    }






    //* ------------------------------------------- *//

    public function getEnter() : DateTime
    {
        return $this->enter;
    }

    public function setEnter(DateTime $enter)
    {
        $this->enter = $enter;

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
  
}