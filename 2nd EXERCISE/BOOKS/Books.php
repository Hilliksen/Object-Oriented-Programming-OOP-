<?php

class Books{
    private int $pageNumber;

    private string $title; 

    private float $price;

    private string $dateCreation;


    //IMPO CONSTRUCT 

    private function __construct(int $pageNumber, string $title, float $price, string $dateCreation) {
        $this -> pageNumber = $pageNumer;
        $this -> title = $title;
        $this -> price = $price;
        $this -> dateCreation = new DateTime ($dateCreation);
    }


    //IMPO GETTERS AND SETTERS 

    public function getPageNumber()
    {
        return $this->pageNumber;
    }
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }


    public function getPrice()
    {
        return $this->price;
    }

  
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

  
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

  
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    
}