<?php

require __DIR__ . "/vendor/autoload.php";


//Create a class that represents a light switch


class LightSwitch
{
    private $isOn;
    private $turnOn;
    private $turnOff;

    public function __construct($isOn,$turnOn,$turnOff)
    {
        $this->isOn = $isOn;
       $this->turnOn = $turnOn;
       $this->turnOff = $turnOff;
    }

    public function isOn()
    {
      
    }

    public function turnOn()
    {
        if($this->isOn){
            return true;
        }

    }

    public function turnOff()
    {
            if($this->turnOff){
            return $this->turnOff(false);
            }
    }


}





$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false

