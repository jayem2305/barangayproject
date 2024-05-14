<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCessation extends Model
{
    use HasFactory;

    protected $table = 'business_cessation';

    protected $fillable = [
        'voters',
        'name',
        'copy',
        'bname',
        'CEO',
        'baddress',
        'requirements'
    ];
}
