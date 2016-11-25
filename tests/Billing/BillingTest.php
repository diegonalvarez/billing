<?php

namespace League\Billing\Billing;

use League\Billing\Billing;

class BillingTest extends \PHPUnit_Framework_TestCase
{

    protected $billing;

    public function setUp()
    {
        $this->billing = new Billing;
    }

    /**
     * @expectedException \League\Billing\Payments\Exception\PaymentException
     * @test
     * Test that Payment doesn't exist
     */
    public function exceptionPayment()
    {
        $this->billing = new Billing('Unknown');
    }

    /**
     * @expectedException \League\Billing\Invoices\Exception\InvoicesException
     * @test
     * Test that Payment doesn't exist
     */
    public function exceptionInvoice()
    {
        $this->billing = new Billing('Authorize', 'Unknown');
    }
}
