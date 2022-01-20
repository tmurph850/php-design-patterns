<?php

namespace App\Strategy;

use stdClass;

class CreditCardDriver implements PaymentDriverInterface
{
    /**
     * Process the payment using CC info.
     *
     * @param stdClass $paymentInfo
     * @return string
     */
    public function processPayment(stdClass $paymentInfo): string
    {
        return 'Payment processed with credit card information!';
    }
}
