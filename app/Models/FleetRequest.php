<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FleetRequest extends Model
{
    use HasFactory;

    protected $table = "fleet_requests";

    protected $fillable = [

        'created_at',
        'id',
        'requests',
        'status',
        'transportation_id',
        'updated_at',

    ];

}