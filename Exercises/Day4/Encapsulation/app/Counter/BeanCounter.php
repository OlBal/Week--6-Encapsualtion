<?php

namespace App\Counter;

class BeanCounter 
{
    public function __construct (Counter $counter)
    {
        $this->counter = $counter;
    }
   
    public function addBean() : BeanCounter
    {
        $this->counter->increment();
        return $this;
    }

    public function howMany() : float
    {
        return $this->counter->count();
    }

}