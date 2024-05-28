<?php
namespace Customer;

require_once "FoodItems/FoodItem.php";

use FoodItem\FoodItem;

class FoodOrder extends FoodItem{
    parent::__construct()
    protected int $employeeId;
    protected  double $salary;

    public function __construct($name, $age, $address, $employeeId, $salary){
        parent::__construct($name, $age, $address);
        $this->employeeId = employeeId;
        $this->salary = salary;
    }

    public function interestedCategories(Invoice $invoice) {
        return $invoice;
    }
}