<?php
namespace Persons\Employees;


class Cashier extends Employee {
    public function __construct($name, $age, $address, $employeeId, $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder {
        $items = [];
        foreach ($restaurant->getMenu() as $item) {
            if (in_array($item->getCategory(), $categories)) {
                $items[] = $item;
            }
        }
        return new FoodOrder($items, new \DateTime());
    }

    public function generateInvoice(FoodOrder $order): Invoice {
        $totalPrice = 0;
        foreach ($order->getItems() as $item) {
            $totalPrice += $item->getPrice();
        }
        return new Invoice($totalPrice, $order->getOrderTime(), count($order->getItems()) * 5);
    }

    public function getJobName(): string {
        return "Cashier";
    }

}
