<?php

namespace App\Services;

interface PaymentInterface
{
    public function pay($amount);
    public function refund($amount);
}
