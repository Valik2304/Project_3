<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;

class BasketDeleteOneController extends Controller
{
    public function execute(Request $request){
        $id = $request->get('id');
//        $id =  $_GET['id'];
        session_start();
        $cart = new Good();
        $cart->recalc($id);
        //if (empty($_SESSION['cart']))return view('product.basket2222');
       // if ($_SESSION['cart']['qs']['qty'] == 0 && $_SESSION['cart']['qs']['qty'] == 0): return view('product.basket2222');
       // else:
       return redirect()->route('basketadd');
        //endif;



//        $qty_sum = $_SESSION['cart']['qs'];
//
//        $data = [
//            'title' => 'Корзина',
//            '_SESSION' => $_SESSION,
//            'qty_sum' => $qty_sum
//
//        ];
//
//        return view('product.basket', $data);

    }
//    public function execute2() {
//        echo "WORKING!!!";
//    }
}
