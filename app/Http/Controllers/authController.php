<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    private $validUsername = 'leduchai';
    private $validPassword = '123456';

    public function showLogin()
    {
        return view('auth.login');
    }

    public function checkLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === $this->validUsername && $password === $this->validPassword) {
            return redirect('/')->with('success', 'Đăng nhập thành công!');
        }

        return redirect()->route('auth.login')->withErrors([
            'login' => 'Tên đăng nhập hoặc mật khẩu không chính xác!',
        ]);
    }

    public function showSignup()
    {
        return view('auth.signup');
    }

    public function checkSignup(Request $request)
    {
        $username = $request->input('username');

        if ($username === $this->validUsername) {
            return redirect()->route('auth.signup')->withErrors([
                'signup' => 'Tên đăng nhập này đã tồn tại!',
            ]);
        }

        return redirect()->route('auth.login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }


}
