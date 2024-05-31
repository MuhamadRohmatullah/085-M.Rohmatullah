<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function profile(){
       
        $user = User::find(auth()->id());

        return view('user.profile', [
            'user' => $user
        ]);

    }

    public function updateProfile(Request $request, $id){
        $user = User::find($id);
        if (!$user) { // !false == true
            return "User tidak ditemukan";
        }

        $payload = $request->only(['name', 'email', 'birth_date', 'gender', 'phone_number', 'addres', 'password']);

        $user->update($payload);

       return redirect()->route('profile');
    
    }

    public function delete(string $id){
        $user = User::find($id);
        if (!$user) { // !false == true
            return "User tidak ditemukan";
        }

        $user->delete();

        return redirect()->route('home');

    }
}
