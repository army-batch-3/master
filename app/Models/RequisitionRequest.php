<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitionRequest extends Model
{
    use HasFactory;

    protected $table = "requisition_requests";

    protected $fillable = [

        'created_at',
        'id',
        'requestor_id',
        'requests',
        'status',
        'type',
        'updated_at',

    ];

}