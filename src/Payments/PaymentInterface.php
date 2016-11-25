<?php

namespace League\Billing\Payments;

interface PaymentInterface
{
    public function build($payment);
}
