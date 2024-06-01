<?php
namespace Persons\Employees;

class Chef extends Employee {
    public function __construct($name, $age, $address, $employeeId, $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood($foodOrder) {
        echo "Preparing food order...";
    }

    public function getJobName(): string {
        return "Chef";
    }

    public function getName(): string {
        return $this->name;
    }

}
