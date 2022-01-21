<?php

namespace App\Strategy;

use stdClass;

class GooglePayDriver implements PaymentDriverInterface
{
    /**
     * Process the payment with Google Pay.
     *
     * @param stdClass $paymentInfo
     * @return string
     */
    public function processPayment(stdClass $paymentInfo): string
    {
        return 'Payment processed with Google Pay!';
    }
}
