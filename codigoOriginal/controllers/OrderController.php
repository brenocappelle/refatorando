<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\CreditCardPayment;
use App\Services\PayPalPayment;

class OrderController
{
    public function createOrder($amount, $paymentMethod)
    {
        // Criação do pedido
        $order = new Order();
        $order->amount = $amount;

        // Processamento do pagamento
        if ($paymentMethod == 'credit_card') {
            $payment = new CreditCardPayment();
            $payment->pay($amount);
        } elseif ($paymentMethod == 'paypal') {
            $payment = new PayPalPayment();
            $payment->pay($amount);
        }

        return "Order created and payment processed.";
    }
}
