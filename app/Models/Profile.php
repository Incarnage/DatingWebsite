<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        "img1",
        "img2",
        "img3",
        "nickname",
        "bio",
        "course",
        "gender",
        "school",
        "age",
        "height",
        "hobbies1",
        "hobbies2",
        "hobbies3",
        "interest1",
        "interest2",
        "interest3",
    ];
}
