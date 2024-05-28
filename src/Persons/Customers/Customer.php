<?php
namespace Persons\Customers;

require_once __DIR__ ."/../Person.php";

class Customer extends \Persons\Person{
    private $interestedTasteMap;

    public function __construct($name, $age, $address, $interestedTasteMap) {
        parent::__construct($name, $age, $address);
        $this->interestedTasteMap = $interestedTasteMap;
    }

    public function interestedCategories(Invoice $invoice) {
        return $invoice;
    }

    public function order($restaurant) {
        $totalAmount = 0.0;
        foreach ($this->interestedTasteMap as $itemName => $quantity) {
            foreach ($restaurant->getMenu() as $menuItem) {
                if ($menuItem->getName() === $itemName) {
                    $totalAmount += $menuItem->getPrice() * $quantity;
                }
            }
        }
        return new \Invoices\Invoice($totalAmount, new \DateTime(), rand(1000, 9999));
    }
}