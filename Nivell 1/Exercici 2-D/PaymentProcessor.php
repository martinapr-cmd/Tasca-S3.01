<?php

class PaymentProcessor
{
    private PaymentGateway $gateway;

    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}