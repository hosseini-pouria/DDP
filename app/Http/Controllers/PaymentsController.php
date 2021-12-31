<?php

namespace App\Http\Controllers;

use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use Src\Payment\CashPayment;
use Src\Payment\ChequePayment;
use Src\Payment\OnlinePayment;
use Src\Payment\Order;
use Src\Payment\PaymentService;

class PaymentsController extends Controller
{
    public function startPayment(Request $request)
    {
        $order = new Order(1250000);
        $paymentService = new PaymentService();
        $paymentService->setPaymentMethod($this->makePaymentMethod($request->get('payment_method')));
        $paymentService->pay($order);
    }

    private function makePaymentMethod($method)
    {
        switch ($method) {
            case 'cash':
                return new CashPayment();
                break;
            case 'online':
                return new OnlinePayment();
                break;
            case 'cheque':
                return new ChequePayment();
                break;
            default:
                throw new \RuntimeException('روش پرداخت صحیح نمی‌باشد');
                break;
        }
    }
}
