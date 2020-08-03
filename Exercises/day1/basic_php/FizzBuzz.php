<?php

require __DIR__ . "/vendor/autoload.php";

//write some code that will output the numbers 1 to 100 in the console
//unless the number is divisible by 3, in which case output "Fizz"
///or the number is divisible by 5, in which case output "Buzz"
//if the number is divisible by 3 and 5, output "FizzBuzz




for ($i = 1; $i <= 100; $i += 1){

    if($i % 3 === 0 ){
        dump ("Fizz");
    }else if($i % 5 ===0 ){
        dump ("Buzz");
    }else dump ($i);


}