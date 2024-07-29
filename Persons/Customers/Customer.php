<?php
namespace Persons\Customers;

use FoodItems\FoodItem;
use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person{
    // キーにカテゴリー名を文字列で私、値に数量を整数で渡している
    private array $my_tasted_map;

    public function __construct(string $name, int $age, string $address, array $tasted_map) {
        parent::__construct($name, $age, $address);
        $this->my_tasted_map = $tasted_map;
    }

    public function order(Restaurant $restaurant): array{
        // key: string food_name value: { {key: FoodItem $foodItem value: $amount} }
        $order = [];

        foreach($this->my_tasted_map as $key => $value){
            if(array_key_exists($key, $restaurant->menu)) $order[$key] = $value;
        }

        return $order;
    }

    public function eat(array $dishes) :void{

        foreach($dishes as $dish){
            echo $this->name . " is eating " . $dish . " ..." . "\n";
        }
    }

    public function pay(Invoice $invoice):void{
        echo $this->name . " is paying $". $invoice->finalPrice . " ..." . "\n";
    }


}