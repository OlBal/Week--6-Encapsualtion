<?php
namespace App;

require_once __DIR__ . "/vendor/autoload.php";

spl_autoload_register(function ($app) {
 require_once __DIR__ . "classes/{$app}.php";
});


                                    //~~~~* Challenges *~~~~~\\



//~~~~* Challenge I *~~~~~\\                                    

//Create a class Hello in the App namespace. It should have a method called hello which accepts a string. Don't overthink this one! It's more about the namespaces than the class.

echo "\nQuestion 1:\n";

use App\Hello;

class Hello
{
    public function hello($name)
    {
        return "Hello {$name}";
    }
}

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"



//~~~~* Challenge II *~~~~~\\



//Create a class Person in the App namespace. It should accept a first and last name on creation. It should have a sayHelloTo() method that takes another Person and says hello to them. Make sure your properties are all private: so you'll need to a create fullName() method too.

//Use the class as follows in your bootstrap.php:

// echo "\nQuestion 2\n";

// use App\Person;


// class Person
// {
//   private $firstName;
//   private $lastName;

//   public function __construct($firstName, $lastName)
//   {
//     $this->firstName = $firstName;
//     $this->lastName = $lastName;
//   }

//   public function fullName()
//   {   
//     return "{$this->firstName} {$this->lastName}";
//   }

//   public function sayHelloTo($name)
//   {
//     return "Hello".fullName();
//   }

// }

// $person1 = new Person("Lynne",  "Ramsay");
// $person2 = new Person("Wes", "Anderson");


// dump($person1->sayHelloTo($person2)); // "Hello Wes Anderson"
// dump($person2->sayHelloTo($person1)); // "Hello Lynne Ramsay"


//~~~~* Challenge III *~~~~~\\


//Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times.

echo "\nQuestion 3:\n";

use App\Potato;

class Potato
{

  private $waterTotal = 0; 

  public function water()
  {
    $this->agua = $this->waterTotal+=1;
    return $this;
  }

  public function hasGrown()
  {
    if($this->waterTotal<5)
    {
      return false;
    } else return true;
  }


};



$potato = new Potato();
$potato->water()->water();

dump($potato->hasGrown()); // false

$potato->water()->water();
dump($potato->hasGrown()); // false

$potato->water();
dump($potato->hasGrown()); // true

$potato->water()->water();
dump($potato->hasGrown()); // true







//~~~~* Challenge IV *~~~~~\\

//Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on.

echo "\nQuestion 4:\n";

use App\Library\Book;


$book = new Book("Zero: The Biography of a Dangerous Idea", 256);

// read 12 pages
$book->read(12);
dump($book->currentPage()); // 13 - start on page 1

// read another 25 pages
$book->read(25);
dump($book->currentPage()); // 38
