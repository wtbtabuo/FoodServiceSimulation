<?php

namespace FoodItems;

class Spaghetti {
    private $name;
    private $price;

    public function __construct() {
        $this->name = "Spaghetti";
        $this->price = 6.00; // 価格は適当に設定しています
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}
