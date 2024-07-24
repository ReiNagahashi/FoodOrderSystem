<?php
namespace Persons\Employees;

class Chef extends Employee{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $saraly) {
        parent::__construct($name, $age, $address, $employeeId, $saraly);
    }


    // public function prepareFood(FoodOrder $foodOrder): string{
    //     return "It's time to prepare something...";
    // }
}