<?php
namespace Persons\Employees;

use Invoices\Invoice;

class Cashier extends Employee{

    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
       parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    // レストランオブジェクトを引数年渡す必要がある
    // また、返り値はFoodOrderオブジェクト
    public function generateInvoice($orderList): Invoice{
        $total = 0;
        echo "----------------------------";
        foreach($orderList as $order => $num){
            echo $order;
            $total += $order->price * $num;
        }

        return new \Invoices\Invoice($total, date('URC'));
    }

}