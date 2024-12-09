<?php

class Book{
    private string $title; 

    private DateTime $dateCreation;

    private int $pageNumber;

    private float $price;

    
    private Author $author;

    // private Author $author; 


    //IMPO CONSTRUCT 

    public function __construct(string $title, string $dateCreation, int $pageNumber, float $price, Author $author) {
        $this -> title = $title;
        $this -> dateCreation = new DateTime ($dateCreation);
        $this -> pageNumber = $pageNumber;
        $this -> price = $price;
        $this -> author = $author;
        $this -> author -> addBook($this);
    }


    //IMPO GETTERS AND SETTERS 

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }



    //* ------------------------------------------- *// 

    public function getTitle() : string 
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }



    //* ------------------------------------------- *// 

    public function getPrice() :float
    {
        return $this->price;
    }

  
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }



    //* ------------------------------------------- *// 

    public function getDateCreation() : DateTime
    {
        return $this->dateCreation;
    }

  
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }



    //* ------------------------------------------- *//

    public function getBooks()
    {
        return $this->books;
    }

    public function setBooks($books)
    {
        $this->books = $books;

        return $this;
    }



    public function getAuthor()
    {
        return $this->author;
    }


    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }


    //IMPO FUNCTIONS
    public function __toString(){
        return $this->title;
    }

     public function addBook(Book $book){
        $this-> books[] = $book;
    }



}