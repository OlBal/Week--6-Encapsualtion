<?php

require __DIR__ . "/vendor/autoload.php";

//write some code that will output the numbers 1 to 100 in the console
//unless the number is divisible by 3, in which case output "Fizz"
///or the number is divisible by 5, in which case output "Buzz"
//if the number is divisible by 3 and 5, output "FizzBuzz

$f = "Fizz";
$b = "Buzz";
$fb = "FizzBuzz"


for ($i = 1; $i <= 100; $i += 1){


    $i % 3 === 0 && $i % 5 === 0 ? dump ($fb) : $i % 3 === 0 ? dump ($f) : $i % 5 === 0 ? dump($b) : dump($i);

}