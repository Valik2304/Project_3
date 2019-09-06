<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Basket;
use App\Good;
use App\New_user;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function execute(Request $request){

       if (view()-> exists('site.Index')){

            $category = Category::with('good')->get();
            $good = Good::with('category')->get();;

            $filters = DB::table('goods')->distinct()->pluck('filter');
//dd($filters);
           $filters = htmlspecialchars($filters);

            //$basket = Basket::all();
//           if ($request->$category->name['Сорочки']){
//               $category = Category::with('good')->where('category_id', 2)->get();
//           }

//           dd($good);
           $data = [
              //'title' => 'Інтернет-магазин',
              'category' => $category,
              'good' => $good,
              'filters' => $filters,

           ];

            return view('site.Index', $data);
        }

    }

}
