<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use Validator;
use App\New_user;


class LoginController extends Controller
{
    public function execute(Request $request){


        if ($request->isMethod('post')){
            $input = $request->except('_token');

            $messages = [
                'required' => 'Поле :attribute обов"язкове до заповнення',
                'unique' => 'Поле :attribute повинно бути унікальним'
            ];

            $validator = Validator::make($input,[

                'name' => 'required|max:255',
                'email' =>'required|max:255',
                'password' => 'required|max:255'

            ],$messages);

            if ($validator->fails()){
                return redirect()->route('login')->withErrors($validator)->withInput();
            }

            $new_user = New_user::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' =>$input['password']
            ]);

            if ($new_user->save()){
                return redirect('/')->with('status', "Ви успішно зареєструвались. Приємних покупок");

            }
            if (with('status', "Ви успішно зареєструвались. Приємних покупок")){
                route('basketadd')->isActive;
            }

        }





        if (view()->exists('Account.login')){

            $data = [
                'title' => 'Вхід в свій акаунт'
            ];

            return view('Account.login', $data);

        }
        abort(404);


    }
}
