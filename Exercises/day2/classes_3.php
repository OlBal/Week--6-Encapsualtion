<?php

require __DIR__ . "/vendor/autoload.php";


//Create a class that represents a car


class Car
{
    private $make;
    private $numPlate;
    private $mileage = 0;

    public function __construct($make , $numPlate)
    {
        $this->make = $make;
        $this->numPlate = $numPlate;
      
    }

    public function getNumberPlate()
    {
        return $this->numPlate;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function addJourney($journey){

        $this->mileage += $journey;
        return $this ->mileage;
    }

}




// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
dump($car->getNumberplate()); // "XY11 4TY"
dump($car->getMake()); // "Ford"
dump($car->getMileage()); // 0

// you can add journey
$car->addJourney(100);
dump($car->getMileage()); // 100

$car->addJourney(200);
dump($car->getMileage()); // 300