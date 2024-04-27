<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident; // Make sure to import your Resident model
class ResidentListController extends Controller
{
    

public function index()
{
    // Get counts from the database
    $totalResidences = Resident::whereNotIn('status', ['admin'])->count();
    $totalSeniors = Resident::whereNotIn('status', ['admin'])->where('age', '>=', 65)->count();
    $totalMinors = Resident::whereNotIn('status', ['admin'])->where('age', '<', 18)->count();
    $totalMales = Resident::whereNotIn('status', ['admin'])->where('gender', 'male')->count();
    $totalFemales = Resident::whereNotIn('status', ['admin'])->where('gender', 'female')->count();
    

    // Pass counts to the view
    return response()->json([
        'totalResidences' => $totalResidences,
        'totalSeniors' => $totalSeniors,
        'totalMinors' => $totalMinors,
        'totalMales' => $totalMales,
        'totalFemales' => $totalFemales,
    ]);
}
public function getResidents()
    {
        // Fetch resident data with status "Resident"
        $residents = Resident::where('status', 'Resident')->get();
        
        return response()->json($residents);
    }

    
}
