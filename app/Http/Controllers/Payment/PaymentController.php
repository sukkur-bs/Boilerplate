<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Services\PaymentGateway\PaymentGatewayFactoryService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function initiateTransaction(PaymentGatewayFactoryService $paymentGatewayFactoryService)
    {
        // Validate Request Data
        $requestData = [];

        // Initialize Payment Gateway
        $transactionGateway = $paymentGatewayFactoryService->initialize(request('payment_gateway_code'));

        // Payment Functionality
        $response = $transactionGateway->pay($requestData);
    }
}
