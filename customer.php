<?php

class customer extends account
{

    private string $id;
    private address $address;
    private shoppingCart $shoppingCart;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function addAdress(): bool
    {
        return true;
    }

    public function deleteAdress(): bool
    {
        return true;
    }

    public function changeEmail(): bool
    {
        return true;
    }

    public function changePassword(): bool
    {
        return true;
    }

    public function emptyCart(): void
    {
    }

    public function updateCart(): bool
    {
        return true;
    }
}

$customer = new customer(1, "123456");
var_dump($customer);
