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
        return view('pages.login.index');
    }

    public function Auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->only('email', 'password');

        if(Auth::attempt($input)) {
            return "berhasil";
            // return redirect('/dashboard');
        }else{
            return "gagal";
            // return redirect('/login')->with('error','Gagal');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        if(Auth::check()) {
            return view('pages.dashboard.index');
        } else {
            return redirect()->route('login');
        }
    }

    public function web()
    {
        return view('index');
    }
}
