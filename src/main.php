<?php
spl_autoload_extensions('.php');
spl_autoload_register(function($class) {
    $base_dir = __DIR__ .'/';
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)) {
        require $file;
    }
});

$cheeseBurger = new \FoodItems\CheeseBurger();
$fettuccine = new \FoodItems\Fettuccine();
$hawwaiianPizza = new \FoodItems\HawaiianPizza();
$spaghetti = new \FoodItems\Spaghetti();

$Inavah = new \Persons\Employees\Chef("Inayah Lozano", 40, "Osaka", 1, 30);
$Nadia = new \Persons\Employees\Cashier("Nadia Valentine", 21, "Tokyo", 1, 20);

$saizeriya = new \Restaurants\Restaurant(
    [
        $cheeseBurger,
        $fettuccine,
        $hawwaiianPizza,
        $spaghetti
    ],
    [
        $Inavah,
        $Nadia
    ]
);

$interestedTasteMap = [
    "Margerita" => 1,
    "CheeseBurger" => 2,
    "Spaghetti" => 1
];

$Tom = new \Persons\Customers\Customer("Tom", 20, "Saitama", $interestedTasteMap);

$invoice = $Tom->order($saizeriya);
$invoice->printInvoice();
