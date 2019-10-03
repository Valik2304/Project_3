<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Good;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function execute(Request $request, $id){

        if (view()-> exists('site.byubyuuy')){

            $category = Category::with('good')->get();
            $good = Good::with('category');

            if ($request->has('name')){

                $good->where('name', $request->name);

            }
            $good = $good->get()->where('category_id', $id);// трохи не зрозумілий код;
//$good = DB::table('goods')->where('category_id','=', $id);dd($good);

//             if ($HTTP_GET_VARS ==1):
//                $good = Good::get()->where('category_id', '=', 1);

//            if ($id ==1):
//                $good = DB::table('goods')->where('category_id', '=', 1)->get();
//            elseif ($id == 2):
//                $good = DB::table('goods')->where('category_id', '=', 2)->get();
//            elseif ($id == 3):
//                $good = DB::table('goods')->where('category_id', '=', 3)->get();
//            elseif ($id == 4):
//                $good = DB::table('goods')->where('category_id', '=', 4)->get();
//            elseif ($id == 5):
//                $good = DB::table('goods')->where('category_id', '=', 5)->get();
//            elseif ($id == 6):
//                $good = DB::table('goods')->where('category_id', '=', 6)->get();
//            endif;
            //dd($good);
//            $data = [
//                'title' => 'Товар з категорії',
//                'category' => $category,
//                'good' => $good,
//                '$HTTP_GET_VARS' => $HTTP_GET_VARS
//            ];
            return view('site.byubyuuy', compact('good','category'));
        }


    }
}
