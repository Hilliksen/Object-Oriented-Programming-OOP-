<?php

class Employe {

    //IMPO ATTRIBUTES 
    private string $nom;

    private string $prenom; 
     
    private string $email; 

    private Enterprise $enterprise;  //# Remember you are adding an object called Enterprise that you already declared in another file


    //IMPO CONSTRUCT
    public function __construct(string $nom, string $prenom, string $email, Enterprise $enterprise){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> email = $email;
        $this -> enterprise = $enterprise;
        $this -> enterprise -> addEmploye($this);  //? not sure understood, ASK TOMORROW  ON 05/15/2024

    }





    //IMPO GETTERS SETTERS
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

   

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    

    public function getEmail(): string
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
        
        return $this;
    }

    public function getEnterprise() //?  why does this work without  : Enterprise
    {
        return $this->enterprise;
    }


    public function setEnterprise(Enterprise $enterprise)
    {
        $this->enterprise = $enterprise;

        return $this;
    }
 

    //IMPO FUNCTIONS
    public function getInfos(){
        return $this."works at ".$this->enterprise."<br>"; //# This works because we already have toString for this object in file Enterprise thus we dont have to use the getter for raisonSociale, normally if you dont have that in your previous file you wont be able to make this work and you will have an error!
    //# to add, you cant do $this->enterprise->raisonSociale (it technically should work but) because you have the attribute raisonSociale private! you could do it with getter tho
    //? Whats the reason for private attribute? Still dont understand 
    
    }
    public function __toString(){
        return $this->prenom . " ". $this->nom;
    }



}