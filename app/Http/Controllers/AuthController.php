<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistForm()
    {
        return view ('auth.register');
    }

    public function register(Request $request)
    {
       $validated = $request->validate([
            'name' => 'required|max:255|min:5',
            'email' => 'required|unique:users|email',
            'phoneNumber' => 'required',
            'password' => 'required|min:8',
        ]);
        user::create($validated);
        return redirect()->route('dashboard.user')->with('Selamat akun anda berhasil terdaftar🔥');
    }

    public function showLoginForm()
    {
        return view ('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            $userRole = auth()->user()->role;
            if($userRole == 0){
                return redirect()->intended('/dashboardAdmin')->with('Selamat anda berhasil login 🔥');
            }else if($userRole == 1){
                 return redirect()->intended('/')->with('Selamat anda berhasil login 🔥');
            }
    
        }

        return back()->withErrors([
            'email' => 'yahhh email yang kamu masukkan tidak cocok 😞'
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}

