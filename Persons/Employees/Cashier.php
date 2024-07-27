<?php
namespace Persons\Employees;

use Invoices\Invoice;

use function PHPSTORM_META\type;

class Cashier extends Employee{

    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    // レストランオブジェクトを引数年渡す必要がある
    // また、返り値はFoodOrderオブジェクト
    public function generateInvoice($orderList, $restaurant): Invoice{
        $total = 0;
        echo "------------";
        print_r($restaurant->menu);
        // $orderには["FoodItem"]と["amount"]の２つのkeyがある
        foreach($orderList as $order => $num){
            $total += $restaurant->menu[$order]->price * $num;
        }
        return new Invoice($total, date('URC'));
    }

}