<?php
namespace App\Stuff\Things;


//~~~~* Challenge III *~~~~~\\


//Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times.


class Potato
{

  private $waterTotal = 0; 

  public function water() : Potato
  {
    $this->agua = $this->waterTotal+=1;
    return $this;
  }

  public function hasGrown() : bool
  {
    return $this->waterTotal>=5;
   
  }

};

