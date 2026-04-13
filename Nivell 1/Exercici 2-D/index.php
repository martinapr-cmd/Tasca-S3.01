<?php

require_once "PaymentGateway.php";
require_once "PaymentProcessor.php";
require_once "BankTransfer.php";
require_once "StripePaymentGateway.php";
require_once "PayPalPaymentGateway.php";

$stripe = new StripePaymentGateway();
$stripePayment = new PaymentProcessor($stripe);

echo $stripePayment->procesarPago(100) . "\n";

$paypal = new PayPalPaymentGateway();
$paypalPayment = new PaymentProcessor($paypal);

echo $paypalPayment->procesarPago(300) . "\n";

$transfer = new BankTransfer();
$transferPayment = new PaymentProcessor($transfer);

echo $transferPayment->procesarPago(600) . "\n";