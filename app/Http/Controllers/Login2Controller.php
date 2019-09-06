<?php

namespace App\Http\Controllers;

use App\New_user;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Login2Controller extends Controller
{
    public function execute(Request $request){

        if ($request->isMethod('post')){

            $input = $request->except('_token');

            $messages = [
                'required' => 'Поле :attribute повинно бути заповнене!',
                'min' => 'Поле :attribute повинно містити не менше 3 символів!',
            ];
            $validator = Validator::make($input,[
                'Name' => 'required|max:255',
                'Password' => 'required|max:255|min:3',
            ], $messages);

            $input['Password'] = md5($input['Password'].'ugr7erhgfhcg7we');
//dd($input['Password'] && $input['Name']);

            if ($validator->fails()):
                return redirect()->route('login')->withErrors($validator)->withInput()->with('status', 'ПОМИЛКА!!!Спробуйте знову!');
            endif;



            $New_Users = New_user::all();
            foreach ($New_Users as $v)

            $name = $input['Name'];
            $password = $input['Password'];

            if(  $input['Name'] != $v['name'] or $input['Password'] != $v['password']):

                return redirect()->route('login')->with('status', 'Такий користувач не знайдений! Спробуйте знову!');
                exit();

            elseif ( $input['Name'] == $v['name'] and $input['Password'] == $v['password'] and !empty($name) and !empty($password) ):

                return redirect()->route('home')->with('status', 'Ви успішно авторизувались.Приємних покупок!');

            endif;

        }
    }
}
