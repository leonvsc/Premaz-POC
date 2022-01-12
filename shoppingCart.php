<?php

class shoppingCart
{
    public function update(): bool
    {
        return true;
    }

    public function remove(): bool
    {
        return true;
    }

    public function purchase()
    {
    }

    public function increase()
    {
    }
}

$shoppingCart = new shoppingCart();
var_dump($shoppingCart);
