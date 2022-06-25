<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {   
        try {
            $credentials = $request->validate([
                'email' => 'required|email:dns',
                'password' => 'required'
            ]);

            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }

        } catch (\Exception $err) {
            dd($err);
        }
        return back()->with('loginError', 'login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
