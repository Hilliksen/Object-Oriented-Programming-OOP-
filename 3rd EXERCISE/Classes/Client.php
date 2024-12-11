<?php

class Client{

    private string $name;

    private string $lastName;
    
    private int $age;
    
    private string $city;
    
    private array $accounts;

    
    //IMPO CONTRUCT

    public function __construct( string $name, string $lastName, int $age, string $city) {
        $this -> name = $name;
        $this -> lastName = $lastName;
        $this -> age = $age;
        $this -> city = $city;
        $this -> accounts = [];
        
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

    public function getCity()
    {
        return $this->city;
    }

 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }


    //IMPO FUNCTIONS 
    
    public function __toString(){
        return $this->name . " ". $this->lastName;
    }

    public function addAccount(Account $account){
        $this-> accounts[] = $account;
    }

    public function numAccounts(){
        $result = count($this -> accounts);

        return $result; 
    }



    public function getInfos(){
        $result = 
        "Owner: " . $this->name . " " . $this->lastName . "<br>" .
        "Age: " . $this->getAge() . "<br>" .
        "City: " . $this->getCity() . "<br>" .
        "Accounts: " . $this -> numAccounts() ."<br>";

        return $result;
    }

      
  


   
}