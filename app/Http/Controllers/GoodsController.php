<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Basket;
use App\Good;

class GoodsController extends Controller
{

    public function execute(Request $request,  $id){

        if (view()->exists('product.goods1')){

            $category = Category::with('good')->get();
//            $good = Good::get()->where('id', '3'); //можна скористатись і за потрібною умовою витягнути вже відфільтровані;
//            if ($id == 1):$good = Good::get()->where('id', '1');
//            elseif ($id == 2):$good = Good::get()->where('id', '2');
//            elseif ($id == 3):$good = Good::get()->where('id', '3');
//            elseif ($id == 4):$good = Good::get()->where('id', '4');
//            elseif ($id == 5):$good = Good::get()->where('id', '5');
//            elseif ($id == 6):$good = Good::get()->where('id', '6');
//            elseif ($id == 7):$good = Good::get()->where('id', '7');
//            elseif ($id == 8):$good = Good::get()->where('id', '8');
//            elseif ($id == 9): $good = Good::get()->where('id', '9');
//            elseif ($id == 10):$good = Good::get()->where('id', '10');
//            elseif ($id == 11):$good = Good::get()->where('id', '11');
//            elseif ($id == 12):$good = Good::get()->where('id', '12');
//            elseif ($id == 13):$good = Good::get()->where('id', '13');
//            elseif ($id == 14):$good = Good::get()->where('id', '14');
//            elseif ($id == 15):$good = Good::get()->where('id', '15');
//            endif;

            $good = Good::get()->where('id', $id);
            //dd($good);

            $data = [
                'title' => 'Товар-'.$id,
                'category' => $category,
                'good' => $good
            ];
            return view('product.goods1', $data );

        }
    }
}
//категорії витягуються з бази навіть якщо $category/яка містила категорії з моделі Category:: видалена/ бо по релейшнах дані, включаючи і
//категорії витягуються з бази через $good - що має доступ і до Category::  і до Good:: як виявляється!