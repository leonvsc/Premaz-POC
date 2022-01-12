<?php

class address
{

    private string $name;
    private string $street;
    private string $houseNumber;
    private string $postalCode;
    private string $place;
    private string $telephoneNumber;

    public function __construct($name, $street, $houseNumber, $postalCode, $place, $telephoneNumber)
    {
        $this->name = $name;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->postalCode = $postalCode;
        $this->place = $place;
        $this->telephoneNumber = $telephoneNumber;
    }
}

$address = new address("Jan", "Jansen", "100", "1234AB", "Amsterdam", "0612345678");
var_dump($adres);
