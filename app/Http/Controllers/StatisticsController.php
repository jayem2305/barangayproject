<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StatisticsController extends Controller
{
    public function getResidentsAndMembers()
    {
        // Fetch resident data with status "Resident"
        $residents = Resident::whereIn('status', ['Resident', 'Restricted'])->get();
        // Fetch member data
        $members = Member::whereIn('status', ['Resident', 'Restricted'])->get();
        // Combine resident and member data into a single array
        $data = [
            'residents' => $residents,
            'members' => $members,
        ];
        Log::info('Retrieved Data:', ['Datas: ' => $data]);

        return response()->json($data);
    }
}
