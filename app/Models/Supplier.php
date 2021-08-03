<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = "suppliers";

    protected $fillable = [

        'address',
        'contact',
        'created_at',
        'email',
        'id',
        'industry',
        'logo',
        'name',
        'updated_at',

    ];

}