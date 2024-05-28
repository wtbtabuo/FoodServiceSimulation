<?php

namespace FoodItem;

abstract class FoodItem{
    protected string $name;
    protected string $description;
    protected integer $price;

    public function __construction(string $name, string $description, integer $price){
        $this->name = name;
        $this->description = description;
        $this->price = price;
    }

    abstract public function getCategory(): string;

}