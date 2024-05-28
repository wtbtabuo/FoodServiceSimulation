<?php

namespace FoodItems;

class Fettuccine {
    private $name;
    private $price;

    public function __construct() {
        $this->name = "Fettuccine";
        $this->price = 7.00; // 価格は適当に設定しています
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}
