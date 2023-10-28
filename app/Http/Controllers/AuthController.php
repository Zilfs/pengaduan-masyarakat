<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.index');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function add(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        Masyarakat::create($data);

        return redirect()->route('login')->with('message', 'Berhasil Membuat Akun');;
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('masyarakat')->attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('masyarakat-index');
            // return dd($credentials)->get();
            // return dd(Auth::guard('masyarakat')->user())->get();
        }
        return redirect()->route('login')->with('auth-message', 'Login Gagal, NIK Atau Password Salah');
    }

    public function logout(Request $request)
    {
        Auth::guard('masyarakat')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
