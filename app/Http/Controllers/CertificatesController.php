<?php
namespace App\Http\Controllers;
use App\Models\FtjRequest;
use Illuminate\Http\Request;
use App\Models\IndigencyRequest;
use App\Models\BusinessPermit;
use App\Models\BusinessCessation;
use App\Models\CertificateRequest;
use App\Models\SoloparentRequest;
use Illuminate\Support\Facades\Log;

class CertificatesController extends Controller
{
    public function countPendingFtj()
{
    $pendingCount = FtjRequest::where('type', 'First-Time Job Seeker Oath Taking')->where('status', 'Pending')
    ->orwhere('type', 'First Time Job Seeker Oath Taking')
    ->orwhere('type', 'First Time Job Seeker Oath Taking')
    ->count();
    return response()->json(['count' => $pendingCount]);
}
public function countPendingindigency()
{
    $pendingCount = IndigencyRequest::where('type', 'Barangay Indigency')->where('status', 'pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}
public function countPendingcert()
{
    $pendingCount = CertificateRequest::where('type', 'Barangay Certificate')->where('status', 'pending')
    ->count();
    Log::info('Retrieved Certificate:', ['cert' => $pendingCount]);

    return response()->json(['count' => $pendingCount]);
}
public function countPendingpermit()
{
    $pendingCount = BusinessPermit::where('type', 'Business Permit')->where('status', 'pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}
public function countPendingcessation()
{
    $pendingCount = BusinessCessation::where('type', 'Business Cessation')->where('status', 'pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}
public function countPendingsoloparent()
{
    $pendingCount = SoloparentRequest::where('type', 'Solo Parents')->where('status', 'pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}


//get data to table
public function getData($type)
    {
        switch ($type) {
            case 'ftj':
                $data = FtjRequest::where('type', 'First-Time Job Seeker Oath Taking')
                ->orWhere('type', 'First Time Job Seeker Oath Taking')
                 ->orWhere('type', 'First Time Job Seeker Oath Taking')
                ->where('status', 'pending')
                ->whereHas('residents', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['residents' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            case 'indigency':
                $data = IndigencyRequest::where('type', 'Barangay Indigency')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            case 'certificate':
                $data = CertificateRequest::where('type', 'Barangay Certificate')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            case 'permits':
                $data = BusinessPermit::where('type', 'Business Permit')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                Log::info('Retrieved Resident:', ['permits' => $data]);
                break;

            case 'cessation':
                $data = BusinessCessation::where('type', 'Business Cessation')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            case 'soloparent':
                $data = SoloparentRequest::where('type', 'Solo Parents')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            default:
                $data = [];
        }

        return response()->json($data);
    }

}
