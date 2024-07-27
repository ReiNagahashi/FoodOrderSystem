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
    // Restaurantのメンバ変数menuはFoodItemオブジェクトの配列を持つ
    // カスタマーはmy_tasted_mapにあるキーとしての文字列がrestaurantのkeyに存在するかをチェック
    // trueを返した場合は、my_tasted_mapにあるキーと値のコンボをそのままcartに渡す
    public function order($restaurant): array{
        // key: string food_name value: { {key: FoodItem value: $foodItem}, {key: amount value: $amount} }
        $cart = [];

        foreach($this->my_tasted_map as $key => $value){
            if(array_key_exists($key, $restaurant->menu)) $cart[$key] = $value;
        }

        return $cart;
    }


}