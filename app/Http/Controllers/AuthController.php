<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    public function page_login()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }else{
           return redirect('/dashboard');
        }
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
    		return redirect('/dashboard')->with('sukses','Selamat, Anda berhasil masuk aplikasi');
    	}else{
    		return redirect('/')->with('gagal','mohon masukkan password dengan benar');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }

    public function password_baru($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('newpassword',['user'=>$user,'id'=>$id]);
    }
    public function updatepassword(Request $request, $id)
    {
        $this->validate($request,[
            'password' => 'required|min:6',
            'password_konfirm' => 'required_with:password|same:password|min:6'
        ]);

        $password = bcrypt($request->password);
        User::where('id', $id)->update(['password' => $password,
        'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')]);
        return redirect()->route('petugas')->with('sukses','Selamat, password anda sudah diperbaharui');
    }
}
