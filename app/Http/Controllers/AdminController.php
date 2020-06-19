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
        if(!Auth::check()) {
            return redirect("/admin/login");
        }

    }


    public function login(AdminRequest $request)
    {
        //Auth::logout();
        if(Auth::check())
            return redirect("/admin");

        return view("admin.login");
    }


}
