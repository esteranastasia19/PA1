<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('do_logout');
    }
    public function login()
    {
        return view('pages.admin.auth.main');
    }
    
    public function do_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('admin/dashboard');
        }else{
            return Redirect::back()->withErrors(['loginError', 'Masukkan Password Yang Falid']);
        }
    }
    public function do_logout()
    {
        $user = Auth::guard('admin')->user();
        Auth::logout($user);
        return redirect('admin/auth');
    }
}
