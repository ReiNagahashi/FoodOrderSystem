<?php
namespace FoodItems;


class Pizza extends FoodItem{
    private string $CATEGORY = "Pizza";

    public function __construct() {
        $this->name = "Pizza";
        $this->description = "Pizza with tomate source.";
        $this->price = 15.5;
    }

    static function getCategory(): string
    {
        return "Pizza";
    }
}