<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $table = "metas";

    protected $fillable = [

        'created_at',
        'id',
        'meta_category',
        'meta_key',
        'meta_value',
        'updated_at',

    ];

}