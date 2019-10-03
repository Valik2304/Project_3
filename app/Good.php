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

    public function AddGoods($go, $id, $qty = 1){
//        dd($go['price']);
//         dd($go->id);
//        dd($_SESSION['cart'][$go->id]);

       //$f = $qty * $c; dd($f);
        // так як $go->price містить $біля числа, при будь якій математичній дії , буде помилка НЕ числове значення.
        $f = str_split($go->price);
        $s = array_slice($f,1);
        $go_price = implode($s);
        //dd($go_price);

        if (isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['qty'] += $qty;
            $_SESSION['cart'][$id]['sum'] += $qty * $go_price;
        }else{
            $_SESSION['cart'][$id] = [
                'id' => $id,
                'qty' => $qty,
                'name' => $go->name,
                'image' => $go->image,
                'price' => $go_price,
                'sum' => $qty * $go_price,
            ];
        }

//        dd($_SESSION['cart']);
        $_SESSION['cart']['qs']['qty'] = isset($_SESSION['cart']['qs']['qty']) ? $_SESSION['cart']['qs']['qty'] + $qty: $qty;

        $_SESSION['cart']['qs']['sum'] = isset($_SESSION['cart']['qs']['sum'])? $_SESSION['cart']['qs']['sum'] + $qty * $go_price: $qty * $go_price;
//        dd($_SESSION['cart']);
//        dd( $_SESSION['cart']['id']['qty']);
    }


    public function recalc($id){

        if (!isset($_SESSION['cart'][$id])) return false;
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];//dd($sumMinus);

        $_SESSION['cart']['qs']['qty'] -= $qtyMinus;
        $_SESSION['cart']['qs']['sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);
        if ($_SESSION['cart']['qs']['qty'] == 0 && $_SESSION['cart']['qs']['sum'] == 0){
            //unset($_SESSION);
            session_destroy();
        }

//dd($_SESSION['cart']);
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
