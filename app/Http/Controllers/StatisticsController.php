<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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
    public function index(Request $request)
    {
        try {
            // Fetch the numerical report data from the database
            $numericalReport = DB::select('
                SELECT
                    MONTHNAME(Created_at) AS month_name,
                    WEEK(Created_at) AS week_number,
                    SUM(copy) AS total_copies
                FROM
                    (
                        SELECT Created_at, copy FROM indigency_requests
                        UNION ALL
                        SELECT Created_at, copy FROM certificate_requests
                        UNION ALL
                        SELECT Created_at, copy FROM ftj_requests
                        UNION ALL
                        SELECT Created_at, copy FROM business_permits
                        UNION ALL
                        SELECT Created_at, copy FROM business_cessations
                    ) AS all_requests
                GROUP BY
                    month_name, week_number
                ORDER BY
                    YEAR(Created_at), MONTH(Created_at), week_number
            ');

            // Return the numerical report data as JSON response
            return response()->json($numericalReport);
        } catch (\Exception $e) {
            // Handle any errors and return an error response
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }
}
