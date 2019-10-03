<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_user extends Model
{
    protected $fillable = [
        'name', 'email', 'password'
    ];

    public function basket(){

        return $this->belongsTo(Basket::class);

    }

    public  function authorization($input, $New_Users){

        $input_password = md5($input['Password'] .'ugr7erhgfhcg7we');


        foreach ($New_Users as $v) {

            if ($input_password == $v['password'] and $input['Name'] == $v['name']):
                return redirect()->route('home')->with('status', 'Ви успішно авторизувались!');


//            elseif ($input_password != $v['password'] or $input['Name'] != $v['name']):
//                return redirect()->route('account')->with('status', 'Такий користувач не знайдений! Спробуйте знову!');

            endif;
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
