<?php 
spl_autoload_extensions(".php");
spl_autoload_register( function($name) {
    $filepath = __DIR__ . "/" . str_replace('\\', '/', $name) . ".php";
    echo "\nRequiring...." . $name . " once ($filepath).\n";
    require_once $filepath;
});

$cheeseBurger = new \FoodItems\Burger("CheeseBurger", "CheeseBurger with fresh tomates.", 10);
$Margherita = new \FoodItems\Pizza("Margherita", "Pizza with tomate source and basil.", 15.5);

$Inaba = new \Persons\Employees\Chef("Inaba Mouten", 40, "Okayama", 1, 26.0);
$Nadia = new \Persons\Employees\Cashier("Nadia Valentine", 21, "Amarica", 1, 21.0);

$saizeriya = new \Restaurants\Restaurant(
    [
        $cheeseBurger->name => $cheeseBurger, 
        $Margherita->name => $Margherita
    ],
    [$Inaba, $Nadia]
);

$interestedTastesMap = [
    "Margherita" => 1,
    "CheeseBurger" => 2,
    "Spaghetti" => 1
];

$Tom = new \Persons\Customers\Customer("Tom", 49, 'Dasaitama', $interestedTastesMap);

$order = $Tom->order($saizeriya);

$dishes = $Inaba->receiveOrders($order, $saizeriya);

$Tom->eat($dishes);

$invoice = $Nadia->generateInvoice($order, $saizeriya);

$invoice->printInvoice();

$Tom->pay($invoice);