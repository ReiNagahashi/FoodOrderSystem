<?php
namespace Persons\Customers;

use Persons\Person;

class Customer extends Person{
    private array $my_tasted_map;

    public function __construct($name, $age, $address, $tasted_map) {
        parent::__construct($name, $age, $address);
        $this->my_tasted_map = $tasted_map;
    }

    public function order(): void{
        echo "I'm gonna order !!!";
    }


}