<?php
namespace Persons\Employees;

class Chef extends Employee{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $saraly) {
        parent::__construct($name, $age, $address, $employeeId, $saraly);
    }


    public function prepareFood($foodOrder): array{
        $preparedDishes = [];

        foreach($foodOrder as $key => $value){
            for ($i = 0; $i < $value; $i++){
                echo $this->name . " is cooking " . $key . " right now!" . "\n";
                array_push($preparedDishes, $key);
            }
        }

        return $preparedDishes;
    }
}