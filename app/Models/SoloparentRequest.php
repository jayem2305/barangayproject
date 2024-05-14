<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoloParentRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'voters',
        'name',
        'copy',
        'requirements',
        'children',
        // Add other fillable attributes here
    ];

    // Define any relationships or custom methods here
}
