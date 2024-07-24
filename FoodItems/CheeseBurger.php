<?php
namespace FoodItems;

class CheeseBurger extends FoodItem{
    private string $CATEGORY = "CheeseBurger";

    public function __construct() {
        $this->name = "CheeseBurger";
        $this->description = "CheeseBurger with fresh tomates.";
        $this->price = 10.0;
    }

    static function getCategory(): string
    {
        return "CheeseBurger";
    }
}