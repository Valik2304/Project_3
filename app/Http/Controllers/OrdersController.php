<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order_Item;
use App\Order;
use Illuminate\Support\Facades\Validator;
use App\New_user;
//use Illuminate\Support\Facades\Mail;
use Mail;



class OrdersController extends Controller
{
    public function execute(Request $request) {
        //echo "Cart";
        session_start();



        if ($request->isMethod('post')){

                    $input = $request->except('_token');
        //            $ord =  Order_Item::all();foreach ($ord as $o){}die();

                    $email = $input['email'];
                    $name = $input['name'];



                //var_dump($value['email']);







                    $validator = Validator::make($input, [
                        'name' => 'required|max:255|min:1',
                        'email' => 'required|max:255|min:1',
                        'phone' => 'required|max:255|min:1',
                        'address' => 'required|max:255|min:1'
                    ]);


                    if ($validator->fails()): return redirect('/orders')->withErrors($validator)->withInput()->with('status','Не правильно заповнена форма! Спробуйте знову!');
                    endif;



                    $user = New_user::all();
                    foreach ($user as $value){



                    if($input['name'] == $value['name'] and $input['email'] == $value['email'] and !empty($name) and !empty($email)) :

                            $new_order = Order::create([
                                'qty' => $_SESSION['cart']['qs']['qty'],
                                'sum' => $_SESSION['cart']['qs']['sum'],
                                'name' => $input['name'],
                                'email' => $input['email'],
                                'phone' => $input['phone'],
                                'address' => $input['address'],
                            ]);

                            if ($new_order ->save()){
                                //$order =  Order::all();
                                $order_item = new Order();
                                $order_item->CreateOrderItem($_SESSION['cart'], $new_order['id']);

                                Mail::send('Email.email', ['$_SESSION' => $_SESSION], function ($message){
                                    $message->from('holiukvalentyn@gmail.com', 'Інтернет-магазин E-shopper');
                                    $message->to('тут ел. адреса куди прийде замовлення')->subject('Test email!');
                                });
                                unset($_SESSION['cart']);
                                unset($_SESSION['cart']['qs']['qty']);
                                unset($_SESSION['cart']['qs']['sum']);


                                return redirect()->route('home')->with('status', 'Ваше замовлення успішно виконане!');
                            }
                            else return redirect('/orders')->with('status', 'Помилка оформлення замовлення!');



//                            elseif ($input['name'] != $value['name'] or $input['email'] != $value['email']):
//
//                                 return redirect('/login')->with('status', 'Авторизуйтесь або зареєструйтесь щоб виконати замовлення!');
                    endif;
            }//dd($value['name']);foreach

        }





        if (view()->exists('product.order')):

        return view('product.order');
        else:abort('Щсь не так з документом');
        endif;

    }

//    private function CreateOrderItem($cart, $order_id)
//    {
//        foreach ($cart as $id => $item){
//
//
//
//        }
//    }
}
