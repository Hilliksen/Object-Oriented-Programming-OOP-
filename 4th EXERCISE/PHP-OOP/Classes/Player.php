<?php

class Player {

    private string $firstName;
    private string $lastName;
    private string $position; 
    private int $age;
    private Country $country;  
    private array $careers = [];
    

   

    //IMPO CONTRUCT 

    public function __construct(string $firstName, string $lastName, string $position, int $age, Country $country) {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> position = $position;
        $this -> age = $age;
        $this -> country = $country;
        $this -> country -> addPlayer($this);
        $this -> career = [];
    }

    

    //IMPO GETTERS AND SETTERS 

    public function getFirstName() : string 
    {
        return $this->firstName;
    }
 
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }





    //* ------------------------------------------- *// 

    public function getLastName(): string 
    {
        return $this->lastName;
    }

    
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    

    
    
    //* ------------------------------------------- *// 
    
    public function getPosition(): string 
    {
        return $this->position;
    }

 
    public function setPosition(string $position)
    {
        $this->position = $position;

        return $this;
    }





    //* ------------------------------------------- *// 
 
    public function getAge():int 
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }





    //* ------------------------------------------- *// 
 
    public function getCountry(): Country
    {
        return $this->country;
    }

   
    public function setCountry(Country $country)
    {
        $this->country = $country;

        return $this;
    }

    //IMPO CLUBS

    public function addCareer(Career $career){
        $this -> careers[] = $career;
    }
    
    public function __toString() {
        return $this->firstName. " ". $this->lastName;
    }

    public function playerInfo(){
        $result = "<h1>" . $this . " - " . $this -> getAge(). "</h1> ".
        "<h2> " . $this ->getCountry(). "</h2>" . "<br>" ."<br>";
        

        foreach($this -> careers as $career ){
            $result .= 
            $career -> getClub(). "for ".
            $career -> getYears(). " years <br>"
            ." In ".
            $career -> getEnter() -> format("d/m/Y"). "<br>";
        }

        return $result;
    }
 
}