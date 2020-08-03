<?php

require __DIR__ . "/vendor/autoload.php";

//Write some code that outputs 50 lines so that, if the current line number is n, the output is the total of the first n odd numbers.



for ($i = 1; $i <= 50; $i += 1){
    

    if ($i %2 !== 0){

       $total += $i;
       dump ($total);
    }

 

}