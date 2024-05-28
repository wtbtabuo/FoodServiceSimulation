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

    public function order(array $categories) {
        // 注文処理のロジック
        return new \Invoice(200.0, new \DateTime(), 45);  // assuming Invoice is in the global namespace
    }

    public function getOrder() {
        // 注文取得のロジック
    }
}
