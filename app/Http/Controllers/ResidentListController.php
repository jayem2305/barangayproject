<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use App\Models\Official;
use App\Models\DeclinedNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountApprovalNotification;
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
        $residents = Resident::whereIn('status', ['Resident', 'Restricted'])->get();
        
        return response()->json($residents);
    }

    public function store(Request $request)
    {
        $residentId = $request->input('regNumber');
        Log::info('Retrieved Resident:', ['resident' => $residentId]);
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'reason' => 'required|string|regex:/^[a-zA-Z0-9\s.,?!@#$%^&*()-_=+]+$/', 
        ]);

        try {
            // Fetch the resident based on the ID
            $resident = Resident::findOrFail($residentId);
            Log::info('Retrieved Resident:', ['resident' => $resident]);
            $email = $resident->email;
            Log::info('Resident Email:', ['email' => $email]);
            $subject="Account Restriction Notification";
            $Body = $validatedData['reason'];;
            // Send email notification using Mailable class
            try {
                Mail::to($email)->send(new AccountApprovalNotification($subject, $Body));
                $resident->status = 'Restricted';
                $resident->save();

                 // Create a new record in the declined_notifications table
        $declinedNotification = new DeclinedNotification();
        $declinedNotification->name = $validatedData['name'];
        $declinedNotification->resident_id = $residentId;
        $declinedNotification->comment = $validatedData['reason'];
        $declinedNotification->save();
        return response()->json(['message' => 'Data saved successfully']);
            } catch (\Exception $e) {
                Log::error('Exception while sending email: ' . $e->getMessage());
            }
            return response()->json(['success' => true]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Error sending email notification: Resident with ID ' . $residentId . ' not found');
            return response()->json(['error' => 'Resident not found'], 404);
        } catch (\Exception $e) {
            Log::error('Error sending email notification: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }   
    }
    public function updateStatus(Request $request)
{
    $regNumber = $request->input('regNumbers');
    Log::error('Retrieved Resident:', ['resident' => $regNumber]);
   

    // Retrieve the resident based on the registration number
    $resident = Resident::where('reg_number', $regNumber)->first();

    if ($resident) {
        // Update the status
        $resident->status = "Resident";
        $resident->save();

        // Return a success response
        return response()->json(['message' => 'Status updated successfully']);
    } else {
        // Return an error response if resident is not found
        return response()->json(['error' => 'Resident not found'], 404);
    }
}

public function getResidentsview(Request $request)
    {
        $regNumber = $request->input('regNumber');
        // Fetch resident data with status "Resident"
        $residents = Resident::where('reg_number', $regNumber)->first();
        
        return response()->json($residents);
    }
   
}
