<?php
namespace App;

require_once __DIR__ . "/vendor/autoload.php";



//~~~~* Challenge I *~~~~~\\                                    

//Create a class Hello in the App namespace. It should have a method called hello which accepts a string. Don't overthink this one! It's more about the namespaces than the class.

echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"



// //Challenge II


echo "\nQuestion 2:\n";

use App\Person;

$person1 = new Person("Lynne",  "Ramsay");
$person2 = new Person("Wes", "Anderson");

dump($person1->sayHelloTo($person2)); // "Hello Wes Anderson"
dump($person2->sayHelloTo($person1)); // "Hello Lynne Ramsay"


//Challenge III


echo "\nQuestion 3:\n";

use App\Stuff\Things\Potato;

$potato = new Potato();
$potato->water()->water();

dump($potato->hasGrown()); // false

$potato->water()->water();
dump($potato->hasGrown()); // false

$potato->water();
dump($potato->hasGrown()); // true

$potato->water()->water();
dump($potato->hasGrown()); // true



//Challenge IV


echo "\nQuestion 4:\n";

use App\Library\Book;

$book = new Book("Zero: The Biography of a Dangerous Idea", 256);

// read 12 pages
$book->read(12);
dump($book->currentPage()); // 13

// read another 25 pages
$book->read(25);
dump($book->currentPage()); // 38



//Challenge V


// echo "\nQuestion 5:\n";

// use App\Library\Shelf;

// $shelf = new Shelf();
// $shelf->addBook($book);
// $shelf->addBook(new Book("The Catcher in the Rye", 277));
// $shelf->addBook(new Book("Stamped from the Beginning", 582));

// dump($shelf->titles()); // ["Zero: The Biography of a Dangerous Idea", "The Catcher in the Rye", "Stamped from the Beginning"]