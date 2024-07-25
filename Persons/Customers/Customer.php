<?php
namespace Persons\Customers;

use Persons\Person;

class Customer extends Person{
    // キーにカテゴリー名を文字列で私、値に数量を整数で渡している
    private array $my_tasted_map;

    public function __construct($name, $age, $address, $tasted_map) {
        parent::__construct($name, $age, $address);
        $this->my_tasted_map = $tasted_map;
    }

    //my_tasted_mapのなかの料理が引数に持ってきたレストランのmenuに入っているかをチェック 
    // 最終的にmenuにあった料理飲みを含んだハッシュマップをかえす　
    public function order($restaurant): array{
        // Restaurantのメンバ変数menuはFoodItemオブジェクトの配列を持つ
        foreach($restaurant->productNames as $name){
            echo "1111111111111111111111111";

            echo $name;
        }
        return array_filter($this->my_tasted_map, function($food) use ($restaurant){
            echo "000000000000000000000000000000";
            echo $food;
            echo array_key_exists($food, $restaurant->productNames);

            return array_key_exists($food, $restaurant->productNames);
        }, ARRAY_FILTER_USE_KEY);
    }


}