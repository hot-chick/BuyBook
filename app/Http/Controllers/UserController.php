<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Application;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view("index");
    }

    public function signup(Request $request){
        return view("reg");

    }

    public function signin(Request $request){
        return view("auth");
    }

    public function signup_valid(Request $request){

        $request->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required",
            "confirm_password" => "required",
        ],[
            "name.required" => "Поле обязательное для заполнения",
            "email.unique" => "Данная почта уже занята",
            "password.required" => "Поле обязательное для заполнения",
            "confirm_password.required" => "Поле обязательное для заполнения",
        ]);

        $userInfo = $request->all();
        $user_create = User::create([
            "name"=>$userInfo["name"],
            "email"=>$userInfo["email"],
            "password" => Hash::make($userInfo["password"]),
            "role_id"=> 2,
        ]);

        if($user_create){
            return redirect("/auth")->with("success", "Вы успешно зарегистрировались! А теперь авторизуйтесь");
        }
        else{
            return redirect("/reg")->back()->with("error", "Попытка регистрации неудачная :(");
        }

    }

    public function signin_valid(Request $request){

        $request->validate([
            "email" => "required",
            "password" => "required",
        ],[
            "email.required" => "Поле обязательное для заполнения",
            "password.required" => "Поле обязательное для заполнения",
        ]);

        $user = $request->only("email", "password");
        $auth = Auth::attempt([
            'email' => $user['email'],
            'password' => $user['password']
            ]);



        if($auth){
            return redirect("/")->with("success", "Вы успешно авторизовались!");
        }
        else{
            return redirect("/auth")->back()->with("error", "Попытка авторизации неудачная :(");
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
