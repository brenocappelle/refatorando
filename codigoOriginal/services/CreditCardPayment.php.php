<?php
namespace App\Services;

interface PaymentInterface
{
    public function pay($amount);
    public function refund($amount);
}

class CreditCardPayment implements PaymentInterface
{
    public function pay($amount)
    {
        // Lógica de pagamento com cartão de crédito
    }

    public function refund($amount)
    {
        // Lógica de reembolso com cartão de crédito
    }
}

class PayPalPayment implements PaymentInterface
{
    public function pay($amount)
    {
        // Lógica de pagamento com PayPal
    }

    public function refund($amount)
    {
        // Lógica de reembolso com PayPal
    }
}
