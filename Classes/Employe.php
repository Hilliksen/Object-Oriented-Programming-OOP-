<?php

class Employe {

    //IMPO ATTRIBUTES 
    private string $nom;

    private string $prenom; 
     
    private string $email; 

    private array $contrats;


    //IMPO CONSTRUCT
    public function __construct(string $nom, string $prenom, string $email){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> email = $email;
        // $this -> enterprise = $enterprise;
        // $this -> enterprise -> addEmploye($this);  //? not sure understood, ASK TOMORROW  ON 05/15/2024
        $this -> contrats = [];

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

        
    public function getContrats()
    {
        return $this->contrats;
    }

    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }


 
    //IMPO FUNCTIONS 

    public function __toString(){
        return $this->prenom . " ". $this->nom;
    }

    public function addContrat(Contrat $contrat){
        $this-> contrats[] = $contrat;
    }

    public function afficherEnterprise() {
        $result = "<h2> Enterprise de $this </h2>";

        foreach($this -> contrats as $contrat){
            $result .= $contrat -> getEnterprise(). "( ". $contrat -> getDateEmbauche(). " en ". $contrat -> getTypeContrat(). ") <br>"; 
        }
        
        return $result;

    }

}