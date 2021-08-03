<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestockRequest extends Model
{
    use HasFactory;

    protected $table = "restock_requests";

    protected $fillable = [

        'created_at',
        'id',
        'requests',
        'status',
        'supplier_id',
        'updated_at',

    ];

}