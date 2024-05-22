<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

        return view("admin.user_management", [
            "users" => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("user.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $name = request()->post('name');
        $email = request()->post('email');
        $date = request()->post('date');
        $male = request()->post('male');
        $female = request()->post('female');
        $phone = request()->post('phone');
        $addres = request()->post('addres');

        @dd([
            $name,
            $email,
            $date,
            $male,
            $female,
            $phone,
            $addres
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = [
            [
                "id" => 1,
                "name" => "Beckam putra",
                "email" => "beckam@persib.co.id",
                "date" => "22-12-2001",
                "gender" => "Male",
                "phone" => "08389272625",
                "password" => "jhhs656"
            ],
            [
                "id" => 2,
                "name" => "Febri haryadi",
                "email" => "febri@persib.co.id",
                "date" => "02-12-1998",
                "gender" => "Male",
                "phone" => "08389585",
                "password" => "tghh56"
            ]

        ];

        $result = [];

        foreach($users as $user){
            if($user["id"] == $id){
                $result = $user;
            }
        }

        return $result;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = [
            [
                "id" => 1,
                "name" => "Beckam putra",
                "email" => "beckam@persib.co.id",
                "date" => "22-12-2001",
                "gender" => "Male",
                "phone" => "08389272625",
                "password" => "jhhs656"
            ],
            [
                "id" => 2,
                "name" => "Febri haryadi",
                "email" => "febri@persib.co.id",
                "date" => "02-12-1998",
                "gender" => "Male",
                "phone" => "08389585",
                "password" => "tghh56"
            ]

        ];

        $result = [];

        foreach($users as $user){
            if($user["id"] == $id){
                $result = $user;
            }
        }

        return view('admin.edituser', [
            'user' => $result
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = [
            [
                "id" => 1,
                "name" => "Beckam putra",
                "email" => "beckam@persib.co.id",
                "date" => "22-12-2001",
                "gender" => "Male",
                "phone" => "08389272625",
                "password" => "jhhs656"
            ],
            [
                "id" => 2,
                "name" => "Febri haryadi",
                "email" => "febri@persib.co.id",
                "date" => "02-12-1998",
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = [
            [
                "id" => 1,
                "name" => "Beckam putra",
                "email" => "beckam@persib.co.id",
                "date" => "22-12-2001",
                "gender" => "Male",
                "phone" => "08389272625",
                "password" => "jhhs656"
            ],
            [
                "id" => 2,
                "name" => "Febri haryadi",
                "email" => "febri@persib.co.id",
                "date" => "02-12-1998",
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
