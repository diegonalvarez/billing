<?php

namespace League\Billing\Invoices;

use League\Billing\Invoices\Exception\InvoicesException;

class Invoice
{
    /**
     * Create a class for an especific Merchant
     * @return Omnipay Merchant | Exception
     */
    public function build($invoice)
    {
        $className = "\\League\\Billing\\Invoices\\$invoice";
        if (!class_exists($className)) {
            throw new InvoicesException("$invoice is not a valid Invoice");
        }
        return new $className;
    }
}
