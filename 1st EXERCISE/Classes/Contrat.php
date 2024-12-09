<?php

class Contrat{
     
     //IMPO ATTRIBUTES 

    private Enterprise $enterprise;

    private Employe $employe;

    private DateTime $dateEmbauche; 
 
    private string $typeContrat; 

    //IMPO CONTRUCT 

    public function __construct(Enterprise $enterprise, Employe $employe, string $dateEmbauche, string $typeContrat){
        $this -> enterprise = $enterprise;
        $this -> employe = $employe;
        $this -> dateEmbauche = new DateTime($dateEmbauche);
        $this -> typeContrat = $typeContrat;
        $this -> enterprise -> addContrat($this);
        $this -> employe -> addContrat($this);
    }


    
    //IMPO GETTERS AND SETTERS 

    public function getEnterprise()
    {
        return $this->enterprise;
    }

    public function setEnterprise($enterprise)
    {
        $this->enterprise = $enterprise;

        return $this;
    }



    //* ------------------------------------------- *// 
    
    public function getEmploye()
    {
        return $this->employe;
    }

    public function setEmploye($employe)
    {
        $this->employe = $employe;

        return $this;
    }

  

    //* ------------------------------------------- *// 

    public function getDateEmbauche()
    {
        return $this->dateEmbauche-> format("d-m-Y"); //# if you want it to rest in DateTime dont do the format as it makes it into a string 
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }



    //* ------------------------------------------- *// 

    public function getTypeContrat()
    {
        return $this->typeContrat;
    }

    public function setTypeContrat($typeContrat)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }




    
    //IMPO FUNCTIONS 



}