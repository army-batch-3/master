<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $table = "warehouses";

    protected $fillable = [

        'bldg',
        'created_at',
        'floor',
        'full_addresss',
        'id',
        'name',
        'room',
        'section',
        'updated_at',

    ];

}