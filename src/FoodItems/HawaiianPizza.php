<?php

namespace FoodItems;

class HawaiianPizza {
    private $name;
    private $price;

    public function __construct() {
        $this->name = "Hawaiian Pizza";
        $this->price = 10.00; // 価格は適当に設定しています
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}
