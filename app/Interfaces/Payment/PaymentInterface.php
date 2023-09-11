<?php

namespace App\Interfaces\Payment;

interface PaymentInterface
{
    public function pay(array $data);

    public function createPayment(array $data);
}
