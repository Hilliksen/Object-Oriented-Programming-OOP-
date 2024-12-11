<?php

class Player {
    private string $firstName;
    private string $lastName;
    private string $position; 
    private DateTime $birthDay;
    private Country $country; 

    //IMPO CONTRUCT 

    public function __construct(string $firstName, string $lastName, string $position, string $birthDay, Country $country) {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> position = $position;
        $this -> birthDay = new DateTime $birthDay;
        $this -> country = $country;
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
 
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;

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
}