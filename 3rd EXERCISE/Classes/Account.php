<?php

class Account{

    //IMPO ATTRIBUTES 
    private string $title;

    private float $ammount;
    
    private string $currency;
    
    private Client $client;
    

    //IMPO CONTRUCT 

    public function __construct(string $title, float $ammount, string $currency, Client $client) {
        $this -> title = $title;
        $this -> ammount = $ammount;
        $this -> currency = $currency;
        $this -> client = $client;
        $this -> client = addAccount($this);
    }

    
    //IMPO GETTERS AND SETTERS 

    public function getTitle()
    {
        return $this->title;
    }

    
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    
    

    //* ------------------------------------------- *// 

    public function getAmmount()
    {
        return $this->ammount;
    }

    public function setAmmount($ammount)
    {
        $this->ammount = $ammount;

        return $this;
    }




    //* ------------------------------------------- *// 

    public function getCurrency()
    {
        return $this->currency;
    }
 
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }


    //IMPO FUNCTIONS 
    

    public function addAccount(Book $book){
        $this-> books[] = $book;
    }
}