<?php

class adminRole
{
    private string $role;

    public function __construct($role)
    {
        $this->role = $role;
    }

    public function viewUser(): bool
    {
        return true;
    }

    public function editUser(): bool
    {
        return true;
    }

    public function deleteUser(): void
    {
    }

    public function viewBill(): bool
    {
        return true;
    }

    public function viewOrder(): bool
    {
        return true;
    }
}

$adminRole = new adminRole("adminRole");
var_dump($adminRole);
