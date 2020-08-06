<?php

namespace App\Counter;

class Counter 
{
    private $counter;

    public function increment() : int
    {
       return  $this->counter += 1;
    }

    public function count() : int
    {
        return $this->counter;
    }
}
