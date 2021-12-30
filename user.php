<?php

class user
{
    private string $voornaam;
    private string $achternaam;
    private string $email;
    private string $telefoonnummer;

    public function __construct($voornaam, $achternaam, $email, $telefoonnummer)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->email = $email;
        $this->telefoonnummer = $telefoonnummer;
    }

    public function verifyLogin()
    {
    }
}

$user = new user("Jan", "Jansen", "janjansen@gmail.com", "0687654321");
var_dump($user);
