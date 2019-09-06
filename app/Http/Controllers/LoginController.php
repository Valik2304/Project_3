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
                'unique' => 'Поле :attribute повинно бути унікальним',
                'min' => 'Поле :attribute повинно містити не менше 3 символів'
            ];

            $validator = Validator::make($input,[

                'name' => 'required|max:255',
                'email' =>'required|max:255',
                'password' => 'required|max:255|min:3'

            ],$messages);

            if ($validator->fails()){
                return redirect()->route('login')->withErrors($validator)->withInput()->with('status', 'Щось пішло не так. Спробуйте знову!');
            }

            $inputs = md5($input['password'].'ugr7erhgfhcg7we');

            $new_user = New_user::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' =>$inputs
            ]);

            if ($new_user->save()){
                return redirect('/')->with('status', "Ви успішно зареєструвались. Приємних покупок!");

            }



        }





        if (view()->exists('Account.login')){

            $data = [
                'title' => 'Вхід в акаунт'
            ];

            return view('Account.login', $data);

        }
        abort(404);


    }
}
