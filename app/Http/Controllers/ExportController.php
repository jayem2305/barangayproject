<?php 
// app/Http/Controllers/ExportController.php
namespace App\Http\Controllers;

use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Date;
use App\Models\Resident;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export(Request $request)
    {
        $filters = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'address' => $request->input('address'),
            'voters' => $request->input('voters'),
            'sex' => $request->input('sex'),
            'status' => $request->input('status')
        ];
    
        return Excel::download(new DataExport($filters), 'data.xlsx');
    }

}
