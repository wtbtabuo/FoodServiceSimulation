<?php

namespace Invoices;

class Invoice {
    private float $amount;
    private \DateTime $date;
    private int $estimatedTimeMinutes;

    public function __construct(float $amount, \DateTime $date, int $estimatedTimeMinutes) {
        $this->amount = $amount;
        $this->date = $date;
        $this->estimatedTimeMinutes = $estimatedTimeMinutes;

    }

    public function printInvoice() {
        echo "--------------------------------\n";
        echo "Final Price: \${$this->amount}\n";
        echo "Date: " . $this->date->format('Y-m-d H:i:s') . "\n";
        echo "--------------------------------\n";
    }
}
