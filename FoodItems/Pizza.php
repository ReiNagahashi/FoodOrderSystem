<?php
namespace FoodItems;


class Pizza extends FoodItem{

    public function __construct($name, $description, $price) {
        parent::__construct($name, $description, $price);
    }

    static function getCategory(): string
    {
        return "Pizza";
    }

}
