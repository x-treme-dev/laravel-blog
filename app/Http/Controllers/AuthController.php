<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //контроллер  авторизации
    public function getLogin(){
        //выводит форму для авторизации
        return view('todo.login');
    }

    //метод аутентификации
    public function postLogin(Request $request){
        // данные из полей email и password пришли в контроллер из формы методом post
        $formFields = $request->only(['email', 'password']);
        // при аутентификации пользователь хочет зайти на определенную страницу
       // если такой страницы нет, то будет переадресация на страницу todo (алиас)
       //Auth-класс аутентификации в Laravel, сравнить данные из полей с данными в таблице users
       if(Auth::attempt($formFields)){
           return redirect()->intended(route('todo'));
       }

       // если попытка аутентификации не удалась, то переходим на страницу
       // аутентификации и указываем для поля email ошибку
       return redirect(route('user-login'))->withErrors([
        'email' => 'Не удалось пройти аутентификацию'
       ]);
    
    }
}
