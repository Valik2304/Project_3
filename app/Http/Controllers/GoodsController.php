<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Basket;
use App\Good;

class GoodsController extends Controller
{

    public function execute(Request $request){

        if (view()->exists('product.goods1')){

            $category = Category::all();
            $good = Good::all();

            $data = [
                'title' => 'Товар-1',
                'category' => $category,
                'good' => $good
            ];
            return view('product.goods1', $data );

        }
    }
}
