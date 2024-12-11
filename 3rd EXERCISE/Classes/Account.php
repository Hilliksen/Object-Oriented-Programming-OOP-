<?php

class Account{

    //IMPO ATTRIBUTES 
    private string $title;

    private float $amount;
    
    private string $currency;
    
    private Client $client;
    

    //IMPO CONTRUCT 

    public function __construct(string $title, float $amount, string $currency, Client $client) {
        $this -> title = $title;
        $this -> amount = $amount;
        $this -> currency = $currency;
        $this -> client = $client;
        $this -> client -> addAccount($this);
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

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

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

    
    public function __toString(){
        return $this->title;
    }
    
    
    // public function addAccount(Account $account){
    //     $this-> accounts[] = $account;
    // }
    
  
    
    public function getInfos(){
        $result = 
        "Accesable funds: " . $this->getAmount() . "<br>" .
        "Currency: " . $this->getCurrency() . "<br>";

        return $result;
    }

    public function transfer(Account $account , float $amount){
        $this -> amount -= $amount;
        $account ->deposit($amount);
    }

    public function deposit( float $amount){
        $this -> amount += $amount;
    }

    public function withdraw( float $amount){
        $this -> amount -= $amount;
    }
}