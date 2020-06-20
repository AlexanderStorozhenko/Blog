<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\AuthRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function auth(AuthRequest $request)
    {
        $credentials = $request->only("email","password");

        if(!$request->validated())
            return back(302)->withErrors($request->validationData());

        if(Auth::attempt($credentials))
        {
            return redirect("/admin");
        }

        return back(302)->withErrors(["неверный логин или пароль!"]);
    }

    public function index(AdminRequest $request)
    {
//        Auth::logout();
        if(!Auth::check()) {
            return redirect("/admin/login");
        }
        return view("admin.home");

    }

    public function logout()
    {
        Auth::logout();
        return redirect("/admin/login");
    }
    public function login(AdminRequest $request)
    {

        if(Auth::check())
            return redirect("/admin");

        $title = "Вход в админ панель";
        return view("/admin/login", compact('title'));
    }




}
