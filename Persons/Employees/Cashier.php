<?php
namespace Persons\Employees;

class Cashier extends Employee{

    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
       parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    // レストランオブジェクトを引数年渡す必要がある
    // また、返り値はFoodOrderオブジェクト
    // public function generateOrder(string[] categories, Restaurant restaurant): FoorOrder{
        
    // }

}