<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessPermit extends Model
{
    protected $fillable = [
        'voters',
        'name',
        'copy',
        'bname',
        'baddress',
        'requirements'
    ];
}
