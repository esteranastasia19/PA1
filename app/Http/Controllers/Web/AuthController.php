<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('guest:web')->except('do_logout');
    }
    public function login()
    {
        return view('pages.web.auth.login');
    }
    public function register()
    {
        return view('pages.web.auth.register');
    }
    public function do_register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = new User;
        $user->name = Str::title($request->name);
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('auth')->with('success', 'Berhasil Registrasi');
    }

    public function do_login(Request $request)
    {
        $request->validate([
            // 'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ]);

        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended('/');
        }else{
            return Redirect::back()->withErrors(['loginError', 'Masukkan Password Yang Falid']);
        }
    }
    public function do_logout()
    {
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect('/');
    }
}
