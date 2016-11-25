<?php

namespace League\Billing\Payments;

use League\Billing\Payments\Exception\PaymentException;

class Payment
{
    /**
     * Create a class for an especific Merchant
     * @return Omnipay Merchant | Exception
     */
    public function build($payment)
    {
        $className = "\\League\\Billing\\Payments\\$payment";
        if (!class_exists($className)) {
            throw new PaymentException("$payment is not a valid payment");
        }
        return new $className;
    }
}
