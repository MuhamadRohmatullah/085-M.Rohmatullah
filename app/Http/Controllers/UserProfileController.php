<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function profile(){
        $users = [
            [
                "id" => 1,
                "name" => "Beckam putra",
                "email" => "beckam@persib.co.id",
                "date" => "22-12-2001",
                "role" => "user",
                "gender" => "Male",
                "phone" => "08389272625",
                "password" => "jhhs656"
            ],
            [
                "id" => 2,
                "name" => "Febri haryadi",
                "email" => "febri@persib.co.id",
                "date" => "02-12-1998",
                "role" => "user",
                "gender" => "Male",
                "phone" => "08389585",
                "password" => "tghh56"
            ]

        ];

        $result = [];

        foreach($users as $user){
            if($user["id"] == 1){
                $result = $user;
            }
        }

        return view('user.myprofile', [
            'user' => $result
        ]);

    }

    public function updateProfile(Request $request, $id){
        $users = [
            [
                "id" => 1,
                "name" => "Beckam putra",
                "email" => "beckam@persib.co.id",
                "date" => "22-12-2001",
                "role" => "user",
                "gender" => "Male",
                "phone" => "08389272625",
                "password" => "jhhs656"
            ],
            [
                "id" => 2,
                "name" => "Febri haryadi",
                "email" => "febri@persib.co.id",
                "date" => "02-12-1998",
                "role" => "user",
                "gender" => "Male",
                "phone" => "08389585",
                "password" => "tghh56"
            ]

        ];

        foreach($users as $key => $user){
            if($user["id"] == $id){
                $users[$key]["name"] =  request()->post('name');
                $users[$key]["email"] =  request()->post('email');
                $users[$key]["phone"] =  request()->post('phone');
                $users[$key]["password"] =  request()->post('password');
            }
        }

        return $users;
    }

    public function delete(string $id){
        $users = [
            [
                "id" => 1,
                "name" => "Beckam putra",
                "email" => "beckam@persib.co.id",
                "date" => "22-12-2001",
                "role" => "user",
                "gender" => "Male",
                "phone" => "08389272625",
                "password" => "jhhs656"
            ],
            [
                "id" => 2,
                "name" => "Febri haryadi",
                "email" => "febri@persib.co.id",
                "date" => "02-12-1998",
                "role" => "user",
                "gender" => "Male",
                "phone" => "08389585",
                "password" => "tghh56"
            ]

        ];

        foreach($users as $key => $value){
            if($value["id"] == $id){
                array_splice($users, $key, 1);
            }
        }
        return $users;

    }
}
