<?php

class item
{
    private int $quantity;
    private float $price;

    public function __construct($quantity, $price)
    {
        $this->quantity = $quantity;
        $this->price = $price;
    }
}

$item = new item(1, 14.99);
var_dump($item);
