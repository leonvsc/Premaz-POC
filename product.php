<?php

class product
{
    private float $price;
    private string $specifications;
    private string $category;

    public function __construct($price, $specifications, $category)
    {
        $this->price = $price;
        $this->specifications = $specifications;
        $this->category = $category;
    }

    public function updateItems(): bool
    {
        return true;
    }
}

$product = new product(14.99, "Mooi groot item", "grote items");
var_dump($product);
