<?php

namespace App\Http\Controllers;

use App\New_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EntranceController extends Controller
{

    public function execute(Request $request){
        if (view()->exists('My_account.my_account')){

            $data = [
                'title' => 'Вхід в свій акаунт'
            ];

            return view('My_account.my_account', $data);

        }


        if ($request->isMethod('post')){
//            return redirect()->route('account2',$request);

            $input = $request->except('_token');

            $validator = Validator::make($input,[
                'Name' => 'required|max:255',
                'Password' =>'required|max:255',
            ]);

            if ($validator->fails()){
                return redirect()->route('account')->with('status', 'Error! Try again');
            }

            $New_Users = New_user::all();

            $new_user = new New_user();
            $new_user->authorization($input, $New_Users);

            return view('My_account.account_items');


        }












    }

//    private function authorization($input, $New_Users){
//
//    }

}
