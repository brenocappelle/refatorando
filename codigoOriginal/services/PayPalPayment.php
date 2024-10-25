<?php

namespace App\Services;

class PayPalPayment
{
    public function pay($amount)
    {
        if ($amount <= 0) {
            throw new \Exception("Invalid amount.");
        }

        // Simulação de pagamento
        echo "Payment of $$amount processed using PayPal.\n";
    }

    public function refund($amount)
    {
        if ($amount <= 0) {
            throw new \Exception("Invalid refund amount.");
        }

        // Simulação de reembolso
        echo "Refund of $$amount processed using PayPal.\n";
    }
}
