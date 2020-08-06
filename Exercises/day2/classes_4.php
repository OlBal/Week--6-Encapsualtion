<?php

require __DIR__ . "/vendor/autoload.php";


//Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.


class Address
{
    private $street;
    private $town;
    private $postcode;

    public function __construct($street, $town, $postcode)
    {
        $this->street= $street;
        $this->town = $town;
        $this->postcode = $postcode;
    }
    
    public function fullAddress() : Address
    {
         $this->address = "{$this->street}, {$this->town}, {$this->postcode}";
         return $this;
    }   

    public function setStreet(string $newStreet) : Address
    {
         $this->street = $newStreet;
         return $this;
    }

    public function setPostcode(string $newPostcode) : Address
    {
         $this->postcode = $newPostcode;
         return $this;
    }

    public function setTown(string $newTown) : Address
    {
         $this->town = $newTown;
         return $this;
    }
}




$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"