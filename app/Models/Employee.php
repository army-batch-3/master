<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";

    protected $fillable = [

        'created_at',
        'first_name',
        'id',
        'last_name',
        'middle_name',
        'photo',
        'updated_at',

    ];

}