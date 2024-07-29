<?php
namespace Persons\Employees;

use Invoices\Invoice;

class Cashier extends Employee{

    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateInvoice($orderList, $restaurant): Invoice{
        $total = 0;

        foreach($orderList as $order => $num){
            $total += $restaurant->menu[$order]->price * $num;
        }
        echo $this->name . " created an invoice. ". "\n";

        return new Invoice($total, date("Y/m/d"));
    }

}