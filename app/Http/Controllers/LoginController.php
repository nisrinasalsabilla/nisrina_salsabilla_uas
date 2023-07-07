<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    function index()
    {
        return view('login', [
            'title' => 'login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $user = User::where('username', $credentials['username'])->first();
        
        // Redirect ke halaman setelah berhasil login
        return redirect('/dashboard');
    }
}
