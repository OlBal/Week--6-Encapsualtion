<?php

require __DIR__ . "/vendor/autoload.php";

//Create two classes Basket and BasketItem. Basket should have an add method which lets you add BasketItems to the basket. It should have a total method that returns the value of all the items' prices. It should have an items method that returns an array of item names.

//Hint: PHP has a number_format function

class Basket
{

    private $total = 0;
    private $arr = [];


    public function __construct()
    {
        $this->arr = $arr;
    }

    public function add($item)
    {
        $this->arr += $this->item;
        return $this->$arr;
    }

    public function total()
    {

    }

    public function items()
    {
        $this->arr = [$item];
        return $this;
    }

}




class BasketItem
{
    private $item;
    private $price;

    public function __construct($item, $price)
    {
        $this->item = $item;
        $this->price = $price; 
    }
}







$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);

dump($basket->total()); // £6.00
dump($basket->items()); // ["coffee","tea"]

