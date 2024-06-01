<?php
namespace Persons\Customers;

require_once __DIR__ ."/../Person.php";

class Customer extends \Persons\Person{
    private $interestedTasteMap;

    public function __construct($name, $age, $address, $interestedTasteMap) {
        parent::__construct($name, $age, $address);
        $this->interestedTasteMap = $interestedTasteMap;
        echo $name ." wanted to eat " .implode(', ', array_keys($interestedTasteMap)) ."\n";
    }

    public function interestedCategories(Invoice $invoice) {
        return $invoice;
    }

    public function order($restaurant) {
        $finalPrice = 0.0;
        $orderedMenuStr = "";
        $orderedMenuArr = [];

        foreach ($this->interestedTasteMap as $itemName => $quantity) {
            foreach ($restaurant->getMenu() as $menuItem) {
                if ($menuItem->getName() === $itemName) {
                    $finalPrice += $menuItem->getPrice() * $quantity;
                    $orderedMenuStr .= $itemName ." × " .$quantity .",";
                    for ($i = 0; $i < $quantity; $i++) {
                        $orderedMenuArr[] = $menuItem->getName();
                    }
                }
            }
        }

        echo $this->name ." was looking at the menu, and ordered " .$orderedMenuStr ."\n";

        $chefName = null;
        $cashierName = null;
        $employees = $restaurant->getEmployees();

        foreach (array_values($employees) as $employee) {
            if ($employee->getJobName() == "Chef") {
                $chefName = $employee->getName();
            } elseif ($employee->getJobName() == "Cashier") {
                $cashierName = $employee->getName();
            }
        }

        echo $cashierName ." received the order.\n";

        foreach(array_values($orderedMenuArr) as $menuItem) {
            echo $chefName ." was cooking " .$menuItem ."\n";
        }

        $cookingTime = rand(1, 30);
        echo $chefName ." took " .$cookingTime ." minutes to cook\n";

        echo $cashierName ." made the invoice\n";

        return new \Invoices\Invoice($finalPrice, new \DateTime(), $cookingTime);
    }
}