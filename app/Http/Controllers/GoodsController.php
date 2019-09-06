<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Basket;
use App\Good;

class GoodsController extends Controller
{

    public function execute(Request $request, $HTTP_GET_VARS){
//походу тут треба механізм фільтрації робити, тобто перевірку який саме товар вибрано;
//        dd($HTTP_GET_VARS);
//        if ($HTTP_GET_VARS == 3):
//           echo "працює я вибрав товар з  айді-3!";
//        else: echo "товар з айді НЕ 3!";
//        endif;
//        die();

        if (view()->exists('product.goods1')){

            $category = Category::with('good')->get();
//            $good = Good::get()->where('id', '3'); //можна скористатись і за потрібною умовою витягнути вже відфільтровані;

            if ($HTTP_GET_VARS == 1):$good = Good::get()->where('id', '1');
            elseif ($HTTP_GET_VARS == 2):$good = Good::get()->where('id', '2');
            elseif ($HTTP_GET_VARS == 3):$good = Good::get()->where('id', '3');
            elseif ($HTTP_GET_VARS == 4):$good = Good::get()->where('id', '4');
            elseif ($HTTP_GET_VARS == 5):$good = Good::get()->where('id', '5');
            elseif ($HTTP_GET_VARS == 6):$good = Good::get()->where('id', '6');
            elseif ($HTTP_GET_VARS == 7):$good = Good::get()->where('id', '7');
            elseif ($HTTP_GET_VARS == 8):$good = Good::get()->where('id', '8');
            elseif ($HTTP_GET_VARS == 9): $good = Good::get()->where('id', '9');
            elseif ($HTTP_GET_VARS == 10):$good = Good::get()->where('id', '10');
            elseif ($HTTP_GET_VARS == 11):$good = Good::get()->where('id', '11');
            elseif ($HTTP_GET_VARS == 12):$good = Good::get()->where('id', '12');
            elseif ($HTTP_GET_VARS == 13):$good = Good::get()->where('id', '13');
            elseif ($HTTP_GET_VARS == 14):$good = Good::get()->where('id', '14');
            elseif ($HTTP_GET_VARS == 15):$good = Good::get()->where('id', '15');
            endif;

            $data = [
                'title' => 'Товар-'.$HTTP_GET_VARS,
                'category' => $category,
                'good' => $good
            ];
            return view('product.goods1', $data );

        }
    }
}
//категорії витягуються з бази навіть якщо $category/яка містила категорії з моделі Category:: видалена/ бо по релейшнах дані, включаючи і
//категорії витягуються з бази через $good - що має доступ і до Category::  і до Good:: як виявляється!