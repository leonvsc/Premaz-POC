<?php

class role
{
    private string $voornaam;
    private string $achternaam;
    private string $email;
    private string $telefoonnummer;

    public function __construct($voornaam, $achternaam, $email, $telefoonnummer)
    {
        $this->$voornaam = $voornaam;
        $this->$achternaam = $achternaam;
        $this->$email = $email;
        $this->$telefoonnummer = $telefoonnummer;
    }
}

$role = new role("Jan", "Jansen", "janjansen@gmail.com", "0612345678");
var_dump($role);
