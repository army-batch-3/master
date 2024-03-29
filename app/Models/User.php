<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = [

        'account_type',
        'avatar',
        'created_at',
        'email',
        'fullname',
        'id',
        'password',
        'updated_at',

    ];

}