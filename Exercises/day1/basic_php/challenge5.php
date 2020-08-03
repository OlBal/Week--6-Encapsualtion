<?php

require __DIR__ . "/vendor/autoload.php";

//Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3


for($i = 3; $i <= 50; $i += 3){
    
    if ($i % 2 === 0) {

        dump ($i);

     }
 

}




