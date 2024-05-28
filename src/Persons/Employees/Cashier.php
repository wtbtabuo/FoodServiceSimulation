<?php
namespace Persons\Employees;


class Cashier extends Employee {
    public function __construct($name, $age, $address, $employeeId, $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder {
        // 仮の実装：指定されたカテゴリーの食べ物アイテムを注文に追加するロジック
        $items = [];
        foreach ($restaurant->getMenu() as $item) {
            if (in_array($item->getCategory(), $categories)) {
                $items[] = $item;
            }
        }
        return new FoodOrder($items, new \DateTime());
    }

    public function generateInvoice(FoodOrder $order): Invoice {
        // 仮の実装：注文に基づいて請求書を生成するロジック
        $totalPrice = 0;
        foreach ($order->getItems() as $item) {
            $totalPrice += $item->getPrice();
        }
        return new Invoice($totalPrice, $order->getOrderTime(), count($order->getItems()) * 5);
    }

}
