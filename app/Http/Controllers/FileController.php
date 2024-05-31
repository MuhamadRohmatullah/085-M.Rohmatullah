<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use App\Models\User;

class FileController extends Controller
{
    function upload(String $id) {

        // request()->validate([
        //     "gambar" => 'required|max:2048|mimes:jpeg,bmp,png',
        //     "berkas" => 'mimes:pdf|max:10240',
        //     "image" => [
        //         'required',
        //         File::types(["jpeg", "bmp", "png"])
        //             ->min('1mb')
        //             ->max('5mb')
        //     ]
        // ]);
        $user = User::find($id);

        $gambar = request()->file("gambar"); // file gambar
        $extenstion = $gambar->extension(); // png, jpg, webp
        $filename = uniqid() . "." . $extenstion;
        $gambar->move("upload/", $filename);

        $uriGambar = "upload/" . $filename;

        $user->photo = $uriGambar;

        $user->save();
        
    }
}
