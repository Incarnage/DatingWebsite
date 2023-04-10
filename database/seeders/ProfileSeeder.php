<?php

namespace Database\Seeders;

use App\Models\Profile;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'user_id'=>1,
            'img1'=>"hanni1.png",
            'img2'=>"hanni2.jpg",
            'img3'=>"hanni3.jpg",
            'nickname'=>"admin",
            'bio'=>"Test Bio",
            'course'=>"BSIT",

        ]);
    }
}
