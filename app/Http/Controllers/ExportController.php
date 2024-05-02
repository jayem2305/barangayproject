<?php 
// app/Http/Controllers/ExportController.php
namespace App\Http\Controllers;

use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Date;
use App\Models\Resident;

class ExportController extends Controller
{
    public function export()
    {
        $currentDate = Date::now()->format('Y-m-d'); // Get the current date in 'YYYY-MM-DD' format
        $fileName = 'Resident_List_' . $currentDate . '.xlsx';
        
        return Excel::download(new DataExport, $fileName, \Maatwebsite\Excel\Excel::XLSX, [
            'headers' => [
                'Content-Type' => 'text/xlsx',
            ],
        ]);
    }

}
