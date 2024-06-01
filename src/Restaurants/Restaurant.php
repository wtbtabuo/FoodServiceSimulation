<?php
namespace Restaurants;

class Restaurant {
    private array $menu;
    private array $employees;

    public function __construct(array $menu = [], array $employees = []) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array {
        return $this->menu;
    }

    public function getEmployees(): array {
        return $this->employees;
    }

    public function order(array $categories) {
        return new \Invoices\Invoice(200.0, new \DateTime(), 45, rand(1000, 9999));  
    }
}
