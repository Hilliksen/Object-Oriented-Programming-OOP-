<?php

class Author{
    
    private string $name;

    private string $lastName;

    private DateTime $birthDay;

    private string $birthPlace;

    private array $books;

    //IMPO CONTRUCT  

    public function __construct(string $name, string $lastName, string $birthDay, string $birthPlace) {
        $this -> name = $name;
        $this -> lastName = $lastName;
        $this -> birthDay = new DateTime($birthDay);
        $this -> birthPlace = $birthPlace;
        $this -> books = [];
    }



    //IMPO GETTERS AND SETTERS
    

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

    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

 
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }




    //IMPO FUNCTIONS 

    public function addBook(Book $book){
        $this-> books[] = $book;
    }
    public function getInfos(){
        $result = $this ->name. " " . $this -> lastName . " is an american author born in " . $this -> getBirthDay() -> format("d/m/Y"). " who wrote well known books like : <br>" ;

        foreach($this -> books as $book ){
             
            $result .= $book -> getTitle(). "( made in ". $dateCreation = getDateCreation() -> format ("d/m/Y"). ") and containing " . getPageNumber(). " costs " . getPrice() ."euros <br>";

        }
    }


   
}