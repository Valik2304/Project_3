<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
use App\Category;
use App\Good;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{

    public function execute(Request $request){
session_start();
//        $id = $HTTP_GET_VARS;
//        dd($id);
//        $id = $_GET['id'];
//        dd($id);





//dd($_GET);





// ПЕРЕВІРИТИ ТУТ ,А НЕ В BasketAddController КУКИ І СЕСІЮ ЧИ ДЛХЛДЯТЬ , МОЖЕ СПРАЦЮВАТИ!!!!!!!!!!!!!!!!!
        if (view()->exists('product.basket')){
//            dd($_GET);
            $req = $request->except('_token');

//            $basket = Basket::with('good')->get();
            if (empty($_GET['id'])):return view('product.basket2222');

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
//            dd($good);

//            setcookie('cart');
//            Session::start();
//            $session = session_start();
            $cart = new Good();
            foreach ($good as $go);
            $cart->AddGoods($go);

//            dd($_SESSION['cart']);
//            dd($_COOKIE['cart']);


            $data = [
                'title' => 'Корзина',
//              'basket' => $basket,
//              'good' => $good,
                'go' => $go,
                '_SESSION' => $_SESSION,
//                '_COOKIE' => $_COOKIE,
                'req' => $req

            ];
//            dd($data);

//            return view('product.basket', $data);


            return redirect()->route('home');
//            return redirect()->route('home')->with('status', 'Its Work!');

        }

    }
}
