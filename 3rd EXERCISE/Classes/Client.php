<?php

class Client{

    private string $name;
    private string $lastName;
    private DateTime $birthDay;
    private string $city;
    private int $numAccount;
    
    
    //IMPO CONTRUCT

    public function __construct( string $name, string $lastName, string $birthDay, string $city, int $numAccount) {
        $this-> name = $name;
        $this-> lastName = $lastName;
        $this-> birthDay= new DateTime ($birthDay);
        $this-> city = $city;
        $this-> numAccount = $numAccount;
    }


    // IMPO GETTERS AND SETTERS 

    
    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

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

    public function getCity()
    {
        return $this->city;
    }

 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }





    //* ------------------------------------------- *// 

    public function getNumAccount()
    {
        return $this->numAccount;
    }

    public function setNumAccount($numAccount)
    {
        $this->numAccount = $numAccount;

        return $this;
    }


    //IMPO FUNCTIONS 
}