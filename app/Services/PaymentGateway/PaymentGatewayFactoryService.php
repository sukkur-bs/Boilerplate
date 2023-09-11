<?php

namespace App\Services\PaymentGateway;

use App\Enums\PaymentChannel;

class PaymentGatewayFactoryService
{
    public function initialize(string $gatewayId)
    {
        return match ($gatewayId) {
            PaymentChannel::BKASH => new BkashPaymentService(),
            PaymentChannel::EBL => new EblPaymentService(),
            default => 'Requested Gateway Not Available',
        };
    }
}
