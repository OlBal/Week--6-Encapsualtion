<?php

require __DIR__ . "/vendor/autoload.php";

//Write some code that outputs a cumulative total of the current line number for 1 to 50.

$total = 0;

for($i = 0; $i <= 50; $i += 1){

    $total += $i;

    dump ($total);
}




