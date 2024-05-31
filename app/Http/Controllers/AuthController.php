<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage(){
        return view('partial.page.user.signup');
    }

    public function login(Request $request){
        $user = User::where("email", $request->email)->first();

        if($user == null){
            return redirect()->back()->with("erorr", "User tidak ditemukan !!!");
        }

        if(!Hash::check($request->password, $user->password)){
            return redirect()->back()->with("error", "Password salah !!");
        }

        auth()->login($user);

        if($user->role_id == 1){
            return redirect()->route('dashboard');
        }

        return redirect()->route('home');
    }

    public function logout(Request $request){
        auth()->logout();

        return redirect()->route('loginPage');
    }

}
