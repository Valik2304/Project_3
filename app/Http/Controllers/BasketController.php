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

        //dd($request->id);//.$request['id'];//даний вираз є аналогією виразу - $_GET['id']
//        if (isset($_SESSION)):dd($_SESSION);else: dd('NOT WORKING!');endif;// ЯКЩО ПЕРЕВІРКА ТУТ ДО Ф-Ї session_start(),
// ТО СЕСІЯ НЕ ІСНУЄ АБО ВИДАЛЕНА;  Цим можна буде скористатись!!!!!!!
session_start();



//$_SESSION = [];
//dd($_SESSION);


//        if (isset($_SESSION)):dd($_SESSION);else: dd('NOT WORKING!');endif;// ЯКЩО ТУТ ВИКЛИКАЮ ПЕРЕВІРКУ ПІСЛЯ Ф-Ї session_start(), ТО СЕСІЯ ІСНУЄ





        if (view()->exists('product.basket')){

            $id = $request->get('id');

            if (empty($id))return view('product.basket2222');

            $product = Good::get()->where('id', $id);//dd($product);
            if (empty($product)) return redirect('/')->with('status', 'ПОМИЛКА. ТОВАР НЕ ДОДАНО!');
            $cart = new Good();
            foreach ($product as $go);//print_r($go['id']);die();
            $cart->AddGoods($go, $id);




//            $data = [
//                'title' => 'Корзина',
////              'basket' => $basket,
////              'good' => $good,
//                'go' => $go,
//                '_SESSION' => $_SESSION,
////                '_COOKIE' => $_COOKIE,
//                'req' => $req
//            ];
//            dd($data);

//            return view('product.basket', $data);



            return redirect()->route('home')->with('status', 'Щось не так. Спробуйте знову!');//Якщо передається не Ajax , а синхронним запитом то редіректнеться на стор товару

        }

    }

//    public function clearCart(){
//
//        $_SESSION['cart'] = [];
//        return redirect()->route('basket');
//    }

}
