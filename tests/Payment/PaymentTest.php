<?php

namespace League\Billing\Payment;

use League\Billing\Payments\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{

    protected $paymentFactory;

    public function setUp()
    {
        $this->paymentFactory = new Payment;
    }

    /**
     * @expectedException \League\Billing\Payments\Exception\PaymentException
     * @test
     * Test that Payment doesn't exist
     */
    public function exception()
    {
        $this->paymentFactory->build('Unkown');
    }
}
