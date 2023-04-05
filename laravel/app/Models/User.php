<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "password"
    ];



    public function post()
    {
        return $this->hasMany(Post::class);
    }
}


