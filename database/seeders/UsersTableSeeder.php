<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoginModel::create([
            'name' => "chuzXII",
            'email' => "kzkzaj@gmail.com",
            'password' => Hash::make("babibabun3"),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
