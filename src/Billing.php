<?php

namespace League\Billing;

class Billing
{

    protected $payment  = null;

    protected $invoices = null;

    /**
     * Create a new Billing Instance
     */
    public function __construct($payment = null, $invoice = null)
    {
        if (! is_null($payment)) {
            $paymentFactory = new \League\Billing\Payments\Payment;
            $this->payment = $paymentFactory->build($payment);
        }

        if (! is_null($invoice)) {
            $invoiceFactory = new \League\Billing\Invoices\Invoice;
            $this->invoice = $invoiceFactory->build($invoice);
        }
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}
