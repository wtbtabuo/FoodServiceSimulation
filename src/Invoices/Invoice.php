<?php

namespace Invoices;

class Invoice {
    private float $amount;
    private \DateTime $date;
    private int $orderNumber;

    public function __construct(float $amount, \DateTime $date, int $orderNumber) {
        $this->amount = $amount;
        $this->date = $date;
        $this->orderNumber = $orderNumber;
    }

    public function printInvoice() {
        echo "Invoice for order number: {$this->orderNumber}\n";
        echo "Amount: \${$this->amount}\n";
        echo "Date: " . $this->date->format('Y-m-d') . "\n";
    }
}
