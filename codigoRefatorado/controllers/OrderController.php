<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\PaymentInterface;

class OrderController
{
    protected $paymentService;

    public function __construct(PaymentInterface $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function createOrder($amount)
    {
        $order = new Order();
        $order->amount = $amount;

        // Processa o pagamento através da interface
        $this->paymentService->pay($amount);

        return "Order created and payment processed.";
    }
}
