<?php

class role
{
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $telephoneNumber;

    public function __construct($firstName, $lastName, $email, $telephoneNumber)
    {
        $this->$firstName = $firstName;
        $this->$lastName = $lastName;
        $this->$email = $email;
        $this->$telephoneNumber = $telephoneNumber;
    }
}

$role = new role("Jan", "Jansen", "janjansen@gmail.com", "0612345678");
var_dump($role);
