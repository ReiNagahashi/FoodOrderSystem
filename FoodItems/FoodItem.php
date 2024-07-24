<?php
namespace FoodItems;

abstract class FoodItem{
    public string $name;
    public string $description;
    public float $price;

    abstract static function getCategory(): string;
}