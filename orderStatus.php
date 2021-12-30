<?php

class orderStatus
{
    private string $new;
    private string $processing;
    private string $underway;
    private string $delivered;
    private string $cancelled;

    public function __construct()
    {

        $this->new = "new";
        $this->processing = "processing";
        $this->underway = "underway";
        $this->delivered = "delivered";
        $this->cancelled = "cancelled";
    }
}
