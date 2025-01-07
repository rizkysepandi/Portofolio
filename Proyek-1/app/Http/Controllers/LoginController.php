<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('bumdes.login',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if ($request->email == 'admin@admin.com') {
                return redirect()->intended('/dashboard_admin');
            }else {
                return redirect()->intended('/dashboard');
            }
            // return redirect('/dashboard');
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
