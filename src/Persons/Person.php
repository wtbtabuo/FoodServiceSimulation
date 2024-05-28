<?php

namespace Persons;

abstract class Person{
    protected string $name;
    protected  int $age;
    protected  string $address;

    public function __construct($name, $age, $address){
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
    }
}