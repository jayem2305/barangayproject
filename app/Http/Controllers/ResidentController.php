<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident; // Assuming your model is named Resident
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountApprovalNotification;
use Illuminate\Support\Facades\Log;
class ResidentController extends Controller
{
    public function pendingaccount()
    {
        $residents = Resident::where('status', 'pending')->get();
        return response()->json($residents);
    }
    public function accountview(Request $request)
{
    // Retrieve the resident ID from the request
    $residentId = $request->input('residentId');

    // Fetch the resident based on the ID
    $resident = Resident::where('id',  $residentId)->first();

    // Return the resident data as JSON
    return response()->json($resident);
}
public function sendEmailNotification(Request $request)
{
    // Retrieve the resident ID from the request
    $residentId = $request->input('residentId');
    Log::info('Received resident ID:', ['residentId' => $residentId]);
    try {
        // Fetch the resident based on the ID
        $resident = Resident::findOrFail($residentId);
        Log::info('Retrieved Resident:', ['resident' => $resident]);
        $email = $resident->email;
        Log::info('Resident Email:', ['email' => $email]);
        $subject="Account Approval Notification";
        $Body = "your Account had been approved you may now login.";
        // Send email notification using Mailable class
        try {
            Mail::to($email)->send(new AccountApprovalNotification($subject, $Body));
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


}
