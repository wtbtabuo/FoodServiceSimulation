<?php

namespace Persons\Employees;

require_once __DIR__ . '/../Person.php';

class Employee extends \Persons\Person {
    protected $employeeId;
    protected $salary;

    public function __construct($name, $age, $address, $employeeId, $salary) {
        parent::__construct($name, $age, $address);
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }
}
