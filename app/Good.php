<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{



    public function category(){

        return $this->belongsTo(Category::class);

    }
    public function basket(){

        return $this->belongsTo(Basket::class);

    }

    public function AddGoods($go, $qty = 1){
//        dd('WORKED!');

        if (isset($_SESSION['cart'][$go->id])){
            $_SESSION['cart'][$go->id]['qty'] =+ $qty;
        }else{
            $_SESSION['cart'][$go->id] = [
                'id' => $go->id,
                'qty' => $qty,
                'name' => $go->name,
                'image' => $go->image,
                'price' => $go->price,
            ];
        }
//        dd($_COOKIE['cart'][$go->id]['price']);
        $_SESSION['cart']['id']['qty'] = isset($_SESSION['cart']['id']['qty']) ? $_SESSION['cart']['id']['qty'] + $qty: $qty;
//        dd($_COOKIE['cart']['id']);
//        $_COOKIE['cart']['id']['sum'] = isset($_COOKIE['cart'][$go->id]['price'])? $_COOKIE['cart'][$go->id]['price'] + $qty * $go->price: $qty * $go->price;

//        dd($_COOKIE['cart']['id']['sum']);
    }





    /**
     * Get the relationships for the entity.
     *
     * @return array
     */
    public function getQueueableRelations()
    {
        // TODO: Implement getQueueableRelations() method.
    }

    /**
     * Get the connection of the entity.
     *
     * @return string|null
     */
    public function getQueueableConnection()
    {
        // TODO: Implement getQueueableConnection() method.
    }

    /**
     * Retrieve the model for a bound value.
     *
     * @param  mixed $value
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function resolveRouteBinding($value)
    {
        // TODO: Implement resolveRouteBinding() method.
    }
}
