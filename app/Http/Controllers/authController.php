<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function checklogin(Request $request) {
        $name = $request -> input('name');
        $pass = $request -> input('pass');
        if ($name === 'leduchai' && $pass === '0047667'){
            return view('Auth.Login', ['success' => 'Login successful!']);
        } else {
            return view('Auth.Login', ['error' => 'Invalid username or password.']);
        }
    }

    public function login() {
        return view('Auth.Login');
    }

    public function register() {
        return view('Auth.Register');
    }

    public function checkregister( Request $request) {
        $name = $request->input('name');
        $pass = $request->input('pass');
        $repass = $request->input('repass');
        $mssv = $request->input('mssv');
        $lopmonhoc = $request->input('lopmonhoc');
        $gioitinh = $request->input('gioitinh');
        
        if($name == "leduchai" && $pass == "123abc" && $repass == "123abc" && 
           $mssv == "0047667" && $lopmonhoc == "67PM2" && $gioitinh == "Nam"){
            return view('Auth.Login', ['success' => 'Registration successful! Please log in.']);
        } else {
            return view('Auth.Register', ['error' => 'Information does not match']);
        }
    }

    public function ageStore(Request $request) {
        $age = $request->input('age');
        session(['age' => $age]);
        return redirect()->route('product.index');
    }

    public function ageSelect() {
        return view('Auth.AgeChecking');
    }
}