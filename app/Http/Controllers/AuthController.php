<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

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
        Masyarakat::create($request->all());

        return redirect()->route('login')->with('message', 'Berhasil Membuat Akun');;
    }
}
