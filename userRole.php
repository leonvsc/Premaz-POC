<?php

class userRole
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

    public function viewBill(): bool
    {
        return true;
    }

    public function viewOrder(): bool
    {
        return true;
    }
}
