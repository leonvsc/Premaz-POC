<?php

class bill
{
    private string $billId;
    private float $sumPrice;

    public function __construct($billId, $sumPrice)
    {
        $this->billId = $billId;
        $this->sumPrice = $sumPrice;
    }

    public function addOrderId(): bool
    {
        return true;
    }

    public function addAdress(): bool
    {
        return true;
    }

    public function addProduct(): bool
    {
        return true;
    }

    public function addItem(): bool
    {
        return true;
    }

    public function createPDF(): bool
    {
        return true;
    }
}
