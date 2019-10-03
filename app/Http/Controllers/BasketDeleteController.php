<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;

class BasketDeleteController extends Controller
{
    public function execute(Request $request){
session_start();
        //$_SESSION['cart'] = [];
        session_destroy();
        return redirect()->route('basketadd')->with('status', 'CART CLEANED!');

    }


}
