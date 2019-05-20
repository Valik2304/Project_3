<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Good;

class CategoryController extends Controller
{
    public function execute(Request $request){

        if (view()-> exists('site.byubyuuy')){

            $category = Category::with('good')->get();


            $good = Good::with('category');

            if ($request->has('name')){

                $good->where('name', $request->name);

            }
            $good = $good->get();

                /* $data = [
                     'title' => 'Товар з категорії',
                     'category' => $category,
                     'good' => $good
                 ];*/

//            if ($category->id[1]){
//                return view('site.category_1');
//            }

            return view('site.byubyuuy', compact('good','category'));
        }


    }
}
