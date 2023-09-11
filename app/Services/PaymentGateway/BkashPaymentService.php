<?php

namespace App\Services\PaymentGateway;

use App\Interfaces\Payment\PaymentInterface;

class BkashPaymentService implements PaymentInterface
{
    public function pay(array $data)
    {
        // Bkash related Functionality
    }
    public function createPayment(array $data)
    {
        // TODO: Implement createPayment() method.
    }
}
