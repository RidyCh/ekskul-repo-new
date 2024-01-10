<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }else{
            return view('pages.login.index');
        }
    }

    public function Auth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'ekskul_role' => 'required',
        ]);

        $input = $request->only('username', 'password', 'ekskul_role');

        if(Auth::guard('web')->attempt($input))
        {
            return redirect('/dashboard');
        }else{
            dd(Auth::guard('web')->user());
            return redirect('/login')->with('error','Gagal');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        return view('pages.dashboard.index');
    }

    public function web()
    {
        return view('index');
    }
}
