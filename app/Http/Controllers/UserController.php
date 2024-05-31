<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $users = $users->toArray();


        return view("admin.dashboard", [
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
     
        $user = new User();

        $user->name = request()->post('name');
        $user->email = request()->post('email');
        $user->birth_date = request()->post('birth_date');
        $user->gender = request()->post('gender');
        $user->addres = request()->post('addres');
        $user->password = Hash::make(request()->post('password'));
        $user->phone_number = request()->post('phone');
        $user->photo = request()->post('photo');
        $user->role_id = 2;
        $user->addres = request()->post('addres');

        $user->save();

        return redirect()->route('landing');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return $user;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        return view('admin.dashboard', [
            'user' => $user
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if (!$user) { // !false == true
            return "User tidak ditemukan";
        }

        $payload = $request->only(['name', 'email', 'birth_date', 'gender', 'phone_number', 'addres', 'password']);

        $user->update($payload);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) { // !false == true
            return "User tidak ditemukan";
        }

        $user->delete();

        return "Data user berhasil dihapus";
    }

    public function UserRegister(Request $request)
    {
     
        $user = new User();

        $user->name = request()->post('name');
        $user->email = request()->post('email');
        $user->birth_date = request()->post('birth_date');
        $user->gender = request()->post('gender');
        $user->addres = request()->post('addres');
        $user->password = Hash::make(request()->post('password'));
        $user->phone_number = request()->post('phone');
        $user->photo = request()->post('photo');
        $user->role_id = 2;
        $user->addres = request()->post('addres');

        $user->save();

        return redirect()->route('landing');
    }

    public function admin(){
       
        $user = User::find(auth()->id());

        return view('admin.dashboard', [
            'user' => $user
        ]);

    }

}

