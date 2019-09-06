<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Good;
use App\Basket;
use Illuminate\Session;

class BasketAddController extends Controller
{
    public function execute(Request $request){
session_start();


//dd($_COOKIE);//не проходить сюди кука'cart', треба щось придумати!
        if (isset($_SESSION)):
            dd($_SESSION);
        endif;

            if (view()->exists('product.basket')){

                $req = $request->except('_token');


                if (empty($_SESSION OR !isset($_SESSION))):return view('product.basket2222');
//
                elseif ($_GET['id'] == 1): $good = Good::get()->where('id', '1');
                elseif ($_GET['id'] == 2): $good = Good::get()->where('id', '2');
                elseif ($_GET['id'] == 3): $good = Good::get()->where('id', '3');
                elseif ($_GET['id'] == 4): $good = Good::get()->where('id', '4');
                elseif ($_GET['id'] == 5): $good = Good::get()->where('id', '5');
                elseif ($_GET['id'] == 6): $good = Good::get()->where('id', '6');
                elseif ($_GET['id'] == 7): $good = Good::get()->where('id', '7');
                elseif ($_GET['id'] == 8): $good = Good::get()->where('id', '8');
                elseif ($_GET['id'] == 9): $good = Good::get()->where('id', '9');
                elseif ($_GET['id'] == 10): $good = Good::get()->where('id', '10');
                elseif ($_GET['id'] == 11): $good = Good::get()->where('id', '11');
                elseif ($_GET['id'] == 12): $good = Good::get()->where('id', '12');
                elseif ($_GET['id'] == 13): $good = Good::get()->where('id', '13');
                elseif ($_GET['id'] == 14): $good = Good::get()->where('id', '14');
                elseif ($_GET['id'] == 15): $good = Good::get()->where('id', '15');
                endif;



//                setcookie('cart');

                $good = Good::all();
                $cart = new Good();
                foreach ($good as $go);
                $cart->AddGoods($go);

//            dd($_SESSION['cart']);
//            dd($_COOKIE['cart']);


                $data = [
                    'title' => 'Корзина',
//                  'good' => $good,
                    'go' => $go,
                    '_SESSION' => $_SESSION,
//                  '_COOKIE' => $_COOKIE['cart'],
                    'req' => $req

                ];

            return view('product.basket', $data);

//                return redirect()->route('home');
//            return redirect()->route('home')->with('status', 'Its Work!');

            }



//        if (empty($_SESSION OR !isset($_SESSION))):return view('product.basket2222');
//
//        elseif (isset($_SESSION) AND !empty($_SESSION)):
//
//            $data = [
//                'title' => 'Корзина',
////              'basket' => $basket,
////              'good' => $good,
////                    'go' => $go,
//                '_SESSION' => $_SESSION,
////                    '_COOKIE' => $_COOKIE['cart'],
//                'req' => $req
//
//            ];
//
//            return view('product.basket', $data);


    }
}
