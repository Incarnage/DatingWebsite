<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'=>1,
            'name'=>"admin",
            'email'=>"admin@m.c",
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('admin')

        ]);
    }
}
