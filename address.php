<?php

class address
{

    private string $name;
    private string $street;
    private string $houseNumber;
    private string $zipcode;
    private string $area;
    private string $phoneNumber;

    public function __construct($name, $street, $houseNumber, $zipcode, $area, $phoneNumber)
    {
        $this->name = $name;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->zipcode = $zipcode;
        $this->area = $area;
        $this->phoneNumber = $phoneNumber;
    }
}

$address = new address("Jan", "Jansen", "100", "1234AB", "Amsterdam", "0612345678");
var_dump($adres);
