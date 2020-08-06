<?php
namespace App\Library;


//~~~~* Challenge IV *~~~~~\\

//Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on.



class Book
{

  private $title;
  private $pages;
  private $pagesRead = 1;

  public function __construct($title, $pages)
  {
  $this->title = $title;
  $this->pages = $pages;
  }

  public function read($num)
  {
    return $this->pagesRead += $num;
  }

  public function currentPage()
  {
    return $this->pagesRead;
  }

}


//~~~~* Challenge V *~~~~~\\

//Create a Shelf class. It should have an addBook() method which gets passed a Book. It should also have a titles() method, which lists the titles of all the books on the shelf.


class Shelf
{

  private $shelf = [];
  private $titles = [];


  public function __construct()
  {
    $this->books = $titles;
  }

  public function addBook($book)
  {
   return $this->shelf[] = $book;
  }

  public function titles()
  {
   
   $this->titles[""] = array_map($this->shelf);
  return $this->titles;
  }

}


