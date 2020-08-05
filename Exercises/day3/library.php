<?php
namespace App\Library\Book;

require_once __DIR__ . "/vendor/autoload.php";

spl_autoload_register(function ($app) {
 require_once __DIR__ . "classes/{$app}.php";
});




//~~~~* Challenge IV *~~~~~\\

//Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on.
