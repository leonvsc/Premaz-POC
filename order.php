<?php

class order
{
    private string $orderId;
    private string $orderDatum;

    public function __construct($orderId, $orderDatum)
    {
        $this->orderId = $orderId;
        $this->orderDatum = $orderDatum;
    }

    public function updateOrder()
    {
    }

    public function createBillingInformation()
    {
    }
}

$order = new order("1", "01-01-2022");
var_dump($order);
