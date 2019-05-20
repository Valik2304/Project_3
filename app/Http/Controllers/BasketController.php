<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
use App\Category;

class BasketController extends Controller
{
    //

    public function execute(Request $request){

        $basket = Basket::with('good')->get();

        if ($request->isMethod('delete')){

        }


        if (view()->exists('product.basket')){

            $category = Category::all();
            $data = [
                'title' => 'Корзина',
                'category' => $category

            ];

            return view('product.basket', $data);

        }

    }
}
