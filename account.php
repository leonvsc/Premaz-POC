<?php

class account
{
    private int $accountID;
    private string $username;
    private string $password;
    private bool $loginStatus;
    private string $firstName;
    private string $email;
    private string $phoneNumber;
    private role $role;

    public function __construct($accountID, $username, $password, $loginStatus, $firstName, $email, $phonenumber)
    {
        $this->accountID = $accountID;
        $this->username = $username;
        $this->password = $password;
        $this->loginStatus = $loginStatus;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->phoneNumber = $phonenumber;
    }

    public function verifyLogin(): bool
    {
        return true;
    }

    public function showLoginStatus(): bool
    {
        return true;
    }

    public function createAccount(): bool
    {
        return true;
    }

    public function login(): bool
    {
        return true;
    }

    public function logOut(): void
    {
    }
}

$account = new account(1, "jantje", "123456", true, "Jan", "jantje@gmail.com", "0612345678");
var_dump($account);
