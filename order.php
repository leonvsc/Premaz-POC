<?php

class order
{
    private string $orderId;
    private string $orderDatum;
    private address $invoiceAddress;
    private address $deliveryAddress;
    private bill $bill;
    private orderStatus $orderStatus;

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
