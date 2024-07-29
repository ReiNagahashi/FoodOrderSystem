<?php
namespace FoodItems;

abstract class FoodItem{
    public string $name;
    public string $description;
    public float $price;

    public function __construct($name, $description, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    abstract static function getCategory(): string;
}