<?php

class Enterprise{  //# Always name your class after the name of your file in php so this is file Enteprise and class is Enterpise 

    //# There are three types of attributes, Private, Protected and Public
    //! Just to be safe use private and never put attributes in public for security reasons, getters and setters are mainly public  
    //! WHEN TALKING ABOUT BEING SECURED ETC ITS NOT ABOUT ATTACKS ON THE INTERNET OR WHATEVER
    //todo CHECK TERM CALLED ENCAPSULATION 

    //IMPO ATTRIBUTES 

    private string $raisonSociale; //# We declare the at

    private DateTime $dateCreation; 

    private string $adresse;
    
    private string $cp;
    
    private string $ville;

    private array $contrats;


    //IMPO CONSTRUCT

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville){

        $this -> raisonSociale = $raisonSociale;
        $this -> dateCreation = new DateTime($dateCreation);
        $this -> adresse = $adresse;
        $this -> cp = $cp;
        $this -> ville = $ville;
        $this -> contrats = [];

    }



    //IMPO GETTERS SETTERS

    public function getRaisonSociale(): string  //# Get as the name suggests is used to get a value that we want 
    {
        return $this->raisonSociale;
    }
    
    public function setRaisonSociale($raisonSociale) //# Set is used to modify or change said value 
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }



    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

  

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }



    public function getCp(): string
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }



    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

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

    public function getAdresseComplete(){
        return $this->adresse . " " . $this ->cp . " " . $this->ville;
    }
    
    public function getInfos(){
        return $this. " was created in " . $this-> getDateCreation()->format("d/m/Y"). " and the enterprise is located here: " . $this -> getAdresseComplete()."<br>";  //? I dont understand why does $this. works for raison sociale 
    }

    public function __toString() {
        return $this->raisonSociale; 
        //# equvalent to array_push($this->employes, $employe)
    }

    public function addContrat(Contrat $contrat){
        $this-> contrats[] = $contrat;
    }

    public function afficherEmployes() {
        $result = "<h2> Employes de $this </h2>";

        foreach($this -> contrats as $contrat){
            $result .= $contrat -> getEmploye(). "( ". $contrat -> getDateEmbauche(). ") "; 
        }

    }

}

