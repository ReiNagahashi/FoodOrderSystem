<?php
namespace Invoices;

class Invoice {
    public float $finalPrice;
    public string $timestamp;

    public function __construct($finalPrice, $timestamp) {
        $this->finalPrice = $finalPrice;
        $this->timestamp = $timestamp;
    }

    public function printInvoice(): void {
        echo "Total comes $" . $this->finalPrice . ". Date: " . $this->timestamp;
    }
}