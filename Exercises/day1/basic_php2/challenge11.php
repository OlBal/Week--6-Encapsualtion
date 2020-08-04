<?php

require __DIR__ . "/vendor/autoload.php";

// Create a function, double, that takes an array of numbers as an argument. Return a new array containing each number doubled.

//Try it using foreach
//Try it using collect()

function double($arr){

  foreach ($arr as $value){

    $newArr[] = $value*2;
  }
  return $newArr;

};




dump(
double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
double([1, 2, 5]), // [2, 4, 10]
);

