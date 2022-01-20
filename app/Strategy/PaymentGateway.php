<?php

namespace App\Strategy;

use stdClass;

class PaymentGateway
{
    /**
     * Inject any dependencies.
     *
     * @param PaymentDriverInterface $driver
     */
    public function __construct(PaymentDriverInterface $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Change the driver used to accept payments.
     * This is where the beauty happens. We can change
     * behavior at runtime!
     *
     * @param PaymentDriverInterface $driver
     * @return void
     */
    public function setPaymentDriver(PaymentDriverInterface $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Process the payment.
     *
     * @param stdClass $paymentInfo
     * @return string
     */
    public function processPayment(stdClass $paymentInfo): string
    {
        return $this->driver->processPayment($paymentInfo);
    }
}
