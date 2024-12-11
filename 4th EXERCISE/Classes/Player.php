<?php

class Player {
    private string $firstName;
    private string $lastName;
    private string $position; 
    private int $age;
    private Club $club; 
    private array $clubs

    //IMPO CONTRUCT 

    public function __construct(string $firstName, string $lastName, string $position, int $age, Country $country) {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> position = $position;
        $this -> age = $age;
        $this -> club = addClub($this);
        $this -> clubs = []
    }

    

    //IMPO GETTERS AND SETTERS 

    public function getFirstName()
    {
        return $this->firstName;
    }
 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }





    //* ------------------------------------------- *// 

    public function getLastName()
    {
        return $this->lastName;
    }

    
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    

    
    
    //* ------------------------------------------- *// 
    
    public function getPosition()
    {
        return $this->position;
    }

 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }





    //* ------------------------------------------- *// 
 
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

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

    //IMPO CLUBS

    public function __toString(){
        return $this->firstName . " ". $this->lastName;
    }

    public function addClub(Club $club)){
        $this-> clubs[] = $club;
    }

    public function getInfos(){
        $result = 
        "Name: " . $this->firstName . " " . $this->lastName . "<br>" .
        "Age: " . $this->getAge() . "<br>" .
        "Position: " . $this->getPosition() . "<br>" .
        "Clubs he has played for: " . $this -> addClub() ."<br>".
        "Origin: " . $this-> getCountry() . "<br>";

        return $result;
    }


 
}