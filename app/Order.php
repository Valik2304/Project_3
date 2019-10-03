<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'qty', 'sum', 'status','name', 'email', 'phone', 'address'
];

    protected $table = 'order';

public function order_item(){
    return $this->hasMany(Order_Item::class);
}


    public function CreateOrderItem($items, $new_order_id){
        foreach ($items as $id => $item){
            if ($id == 'qs'){
                continue;
            }//dd($items);
            //var_dump($or['email']);
//            $f = new Order();$f->order_item();
            $order_item_create =  Order_Item::create([
                'order_id' => $new_order_id,
                'good_id' => $id,
                'name' => $item['name'],
                'price' => $item['price'],
                'qty_item' => $item['qty'],
                'sum_item' => $item['price'] * $item['qty']
            ]);
            $order_item_create->save();
//            if ($order_item_create->save()){
////                session_destroy();
//
//
//            }
        }
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
