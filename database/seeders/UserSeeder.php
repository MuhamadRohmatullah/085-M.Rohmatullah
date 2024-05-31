<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                "name" => "Admin",
                "email" => "admin@ibra.com",
                "email_verified_at" => DB::raw('CURRENT_TIMESTAMP'),
                "password" => Hash::make("AdminIbra"),
                "created_at" => DB::raw('CURRENT_TIMESTAMP'),
                "birth_date" => "2001-04-10",
                "gender" => 1,
                "addres" => "Jalan Padwpokan Girijaya, Cidahu",
                "phone_number" => "083891381790",
                "role_id" => 1
            ]
        ]);
    }
}
