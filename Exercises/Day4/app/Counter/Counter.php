<?php

namespace App\Counter;

class Counter 
{
    private $counter = 0;

    public function increment() : float
    {
       return  $this->counter += 1;
    }

    public function count() : float
    {
        return $this->counter;
    }


}