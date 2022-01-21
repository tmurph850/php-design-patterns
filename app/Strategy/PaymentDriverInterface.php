<?php

namespace App\Strategy;

use stdClass;

interface PaymentDriverInterface
{
    /**
     * Process the payment.
     *
     * @param stdClass $paymentInfo
     * @return string
     */
    public function processPayment(stdClass $paymentInfo): string;
}
