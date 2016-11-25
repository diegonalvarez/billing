<?php

namespace League\Billing\Invoices;

use League\Billing\Invoices\Invoice;

class InvoiceTest extends \PHPUnit_Framework_TestCase
{

    protected $invoiceFactory;

    public function setUp()
    {
        $this->invoiceFactory = new Invoice;
    }

    /**
     * @expectedException \League\Billing\Invoices\Exception\InvoicesException
     * @test
     * Test that the Invoice class doesn't exist
     */
    public function exception()
    {
        $this->invoiceFactory->build('Unknown');
    }
}
