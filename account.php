<?php

class account
{
    private int $accountID;
    private string $username;
    private string $password;
    private bool $loginStatus;

    public function __construct($accountID, $username, $password, $loginStatus)
    {
        $this->accountID = $accountID;
        $this->username = $username;
        $this->password = $password;
        $this->loginStatus = $loginStatus;
    }

    public function createAccount()
    {
    }

    public function login()
    {
    }

    public function logOut()
    {
    }
}

$account = new account(1, "jantje", "123456", true);
var_dump($account);
