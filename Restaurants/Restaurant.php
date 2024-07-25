<?php

namespace Restaurants;

class Restaurant{
    public array $menu;
    public array $productNames;
    private array $employees;
    

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
        $this->productNames = array_map(function($product){
            return $product->name;
        }, $this->menu);
        
    }
}