<?php
namespace App\Library\Book;


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

  public function addBook()
  {
    $this->shelf [] = $this->$book;

  }

  public function titles()
  {
    
  }

}