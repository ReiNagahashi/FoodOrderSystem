<?php
namespace Persons\Employees;

use FoodItems\FoodItem;
use Restaurants\Restaurant;

class Chef extends Employee{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $saraly) {
        parent::__construct($name, $age, $address, $employeeId, $saraly);
    }


    public function receiveOrders(array $foodOrder, Restaurant $restaurant): array{
        $preparedDishes = [];

        foreach($foodOrder as $key => $value){
            for ($i = 0; $i < $value; $i++){
                echo $this->name . " started to cook " . $key . " right now!" . "\n";
                // 実際にシェフが5段階に分けて料理をする
                $this->prepareFoodOrder($restaurant->menu[$key]);
                array_push($preparedDishes, $key);
            }
        }

        return $preparedDishes;
    }

    private function prepareFoodOrder(FoodItem $foodItem): void{
        $foodCategory = $foodItem->getCategory();

        switch ($foodCategory){
            case "Burger":
                $this->prepareBurger();
                break;
            case "Pizza":
                $this->preparePizza();
                break;
            default:
                echo $this->name . "doesn't know how to cook this...😃";
        }
    }

    private function prepareBurger(): void{
        echo "----------PREPARING A BURGER START---------- \n 

        Mix ground beef, salt, and pepper in a bowl... \n 
        Form mixture into patties of equal size... \n 
        Heat grill and cook patties until desired doneness... \n
        Place patties on buns, add lettuce and tomato... \n
        Serve with ketchup, mustard, and cheese if desired... \n";

        echo "----------PREPARING A BURGER FINISHED---------- \n";
    }


    private function preparePizza(): void{
        echo "----------PREPARING A PIZZA START---------- \n 

            Prepare pizza dough, let it rise for one hour... \n 
            Roll out dough and spread tomato sauce evenly... \n 
            Sprinkle mozzarella cheese over the sauce layer... \n
            Add toppings like pepperoni, mushrooms, and bell peppers... \n
            Bake in preheated oven at 475°F for 15 minutes... \n";

        echo "----------PREPARING A PIZZA FINISHED---------- \n";
    }


}