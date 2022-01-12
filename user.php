<?php

class user
{
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $telephoneNumber;
    private account $account;
    private role $role;

    public function __construct($firstName, $lastName, $email, $telephoneNumber)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->telephoneNumber = $telephoneNumber;
    }

    public function verifyLogin()
    {
    }

    public function showLoginStatus(): bool
    {
        return true;
    }
}

$user = new user("Jan", "Jansen", "janjansen@gmail.com", "0687654321");
var_dump($user);
