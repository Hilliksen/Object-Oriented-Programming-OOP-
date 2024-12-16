<?php

class Club {
    private string $name; 
    private int $creationDate;
    private Country $country;
    private array $careers;  //! ARRAY EQUALS A LOOP 

    //IMPO CONTRUCT 

    public function __construct(string $name, int $creationDate, Country $country) {
        $this -> name = $name;
        $this -> creationDate = $creationDate;
        $this -> country = $country;
        $this -> country -> addClub($this);
        $this -> careers = [];
    }   
    //IMPO GETTERS AND SETTERS 

    public function getName() : string
    {
        return $this->name;
    }

   
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }





    //* ------------------------------------------- *// 
 
    public function getCreationDate() : int
    {
        return $this->creationDate;
    }

   
    public function setCreationDate(int $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    




    //* ------------------------------------------- *// 


    public function getCountry() : Country 
    {
        return $this->country;
    }

    public function setCountry( Country $country)
    {
        $this->country = $country;

        return $this;
    }


    //IMPO FUNCTIONS

    public function addCareer(Career $career){
        $this -> careers[] = $career;
    }

    public function __toString() {
        return $this->name;
    }
    
   
    
    public function clubInfo(){

        $result = 
        "<h1> ". $this -> getName(). "</h1>". 
        "<h2> " . $this ->getCountry(). "</h2>". "<br>" ."<br>";

        foreach($this -> careers as $career ){
            $result .= 
            $career -> getPlayer(). " - played for ". 
            $career -> getYears(). " years<br>" . 
            " since ". $career -> getEnter() -> format("Y"). "<br>";
        }

        return $result;


    }
}