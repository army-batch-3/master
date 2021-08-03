<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = "assets";

    protected $fillable = [

        'created_at',
        'description',
        'id',
        'name',
        'photo',
        'stocks',
        'supplier_id',
        'type_of_asset',
        'updated_at',
        'warehouse_id',

    ];

}