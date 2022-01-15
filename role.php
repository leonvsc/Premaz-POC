<?php

class role
{
    private string $role;

    public function __construct($role)
    {
        $this->$role = $role;
    }
}

$role = new role("Admin");
var_dump($role);
