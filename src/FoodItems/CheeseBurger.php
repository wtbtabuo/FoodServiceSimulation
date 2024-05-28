<?php

namespace FoodItems;

class CheeseBurger {
    private $name;
    private $price;

    public function __construct() {
        $this->name = "Cheeseburger";
        $this->price = 5.00; // 価格は適当に設定しています
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}
