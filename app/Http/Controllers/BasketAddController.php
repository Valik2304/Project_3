<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Good;
use App\Basket;
use Illuminate\Session;
use Illuminate\Support\Facades\DB;

class BasketAddController extends Controller
{
    public function execute(Request $request){
session_start();
//$_SESSION = [];
//dd($_SESSION);







//                        $idd = Good::all();foreach ($idd as $go)print_r( ($go->id));die();
                        //$go = DB::table('goods')->select('id')->get();
//if (isset($_SESSION['cart']))dd($_SESSION['cart']);

                            if (empty($_SESSION OR !isset($_SESSION))):return view('product.basket2222');

                            elseif (isset($_SESSION) AND !empty($_SESSION)):




                                //dd($_SESSION['cart']['qs']);
                                if (view()->exists('product.basket')){

                                $qty_sum = $_SESSION['cart']['qs'];

                                $data = [
                                    'title' => 'Корзина',
                                    '_SESSION' => $_SESSION,
                                   // 'res2' => $res2,
                                    'qty_sum' => $qty_sum

                                ];

                                return view('product.basket', $data);

                                }

                            endif;
//                        }
//                return redirect()->route('home');
//            return redirect()->route('home')->with('status', 'Its Work!');






    }
}
