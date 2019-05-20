<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntranceController extends Controller
{
    //
    public function execute(){

        if (view()->exists('Account.account')){

            $data = [
                'title' => 'Вхід в свій акаунт'
            ];

            return view('Account.account', $data);

        }

    }

}
