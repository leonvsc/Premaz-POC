<?php

class klant extends user
{

    private string $id;
    private string $password;
    private adres $adres;
    private winkelwagen $winkelwagen;

    public function __construct($id, $password)
    {
        $this->id = $id;
        $this->password = $password;
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

$klant = new klant(1, "123456");
var_dump($klant);
