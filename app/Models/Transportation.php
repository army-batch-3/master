<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;

    protected $table = "transportations";

    protected $fillable = [

        'brand',
        'created_at',
        'id',
        'notes',
        'status',
        'type',
        'updated_at',

    ];

}