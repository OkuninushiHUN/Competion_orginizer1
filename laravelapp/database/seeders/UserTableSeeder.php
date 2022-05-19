<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
{
    DB::table('users')->delete();

    User::create(['email' => 'foo@bar.com']);
}
}
