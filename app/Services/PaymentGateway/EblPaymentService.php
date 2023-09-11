<?php

namespace App\Services\PaymentGateway;

use App\Interfaces\Payment\PaymentInterface;

class EblPaymentService implements PaymentInterface
{
    public function pay(array $data)
    {
        // EBL related Functionality
    }

    public function createPayment(array $data)
    {
        // TODO: Implement createPayment() method.
    }
}
