<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $primaryKey = 'reg_number'; // Define the custom primary key

    public $incrementing = false; // Disable auto-incrementing

    protected $fillable = [
        'reg_number',
        'lname',
        'fname',
        'mname',
        'ext',
        'address',
        'household',
        'Birth',
        'birthday',
        'age',
        'cnum',
        'gender',
        'civil',
        'citizenship',
        'occupation',
        'indicate_if',
        'owner_type',
        'owner_name',
        'number_of_family',
        'proof_of_owner',
        'voters_filename',
        'valid_id_filename',
        'image_filename',
        'email',
        'password',
        'status' => 'pending',
        // Add other fillable fields here as needed
    ];

    // Other model code...
}
