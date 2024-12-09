<?php

class Author{
    
    private string $name;

    private string $lastName;

    private string $birthDay;

    //IMPO CONTRUCT  

    public function __construct(string $name, string $lastName, string $birthDay) {
        $this -> name = $name;
        $this -> lastName = $lastName;
        $this -> birthDay = new DateTime ($birthDay);
    }



    //IMPO GETTERS AND SETTERS
    
    public function getBirthDay()
    {
        return $this->birthDay;
    }

 
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;

        return $this;
    }

  
    public function getLastName()
    {
        return $this->lastName;
    }

  
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

  
    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}