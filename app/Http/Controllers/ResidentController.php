<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident; // Assuming your model is named Resident

class ResidentController extends Controller
{
    public function pendingaccount()
    {
        $residents = Resident::all();
        return response()->json($residents);
    }
}
