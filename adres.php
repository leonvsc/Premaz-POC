<?php

class adres
{

    private string $naam;
    private string $straat;
    private string $huisnummer;
    private string $postcode;
    private string $woonplaats;
    private string $telefoonnummer;

    public function __construct($naam, $straat, $huisnummer, $postcode, $woonplaats, $telefoonnummer)
    {
        $this->naam = $naam;
        $this->straat = $straat;
        $this->huisnummer = $huisnummer;
        $this->postcode = $postcode;
        $this->woonplaats = $woonplaats;
        $this->telefoonnummer = $telefoonnummer;
    }
}

$adres = new adres("Jan", "Jansen", "100", "1234AB", "Amsterdam", "0612345678");
var_dump($adres);
