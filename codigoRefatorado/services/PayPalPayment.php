<?php

namespace App\Services;

class PayPalPayment implements PaymentInterface
{
    public function pay($amount)
    {
        if ($amount <= 0) {
            throw new \Exception("Invalid amount.");
        }

        echo "Payment of $$amount processed using PayPal.\n";
    }

    public function refund($amount)
    {
        if ($amount <= 0) {
            throw new \Exception("Invalid refund amount.");
        }

        echo "Refund of $$amount processed using PayPal.\n";
    }
}
