<?php
namespace FoodItems;


class Pizza extends FoodItem{

    public function __construct($name, $description, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    static function getCategory(): string
    {
        return "Pizza";
    }
}