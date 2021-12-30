<?php

class winkelwagen
{
    public function update(): bool
    {
        return true;
    }

    public function remove(): bool
    {
        return true;
    }

    public function purchase()
    {
    }

    public function increase()
    {
    }
}

$winkelwagen = new winkelwagen();
var_dump($winkelwagen);
