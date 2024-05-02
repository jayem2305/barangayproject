<?php

namespace App\Exports;

use App\Models\Resident;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Resident::whereIn('status', ['Resident', 'Restricted'])
        ->select('lname', 'fname', 'mname', 'ext', 'birth', 'birthday', 'age', 'gender', 'civil', 'citizenship', 'occupation', 'indicate_if')->get();
    }
    public function headings(): array
    {
        return [
            'LAST NAME',
            'FIRST NAME',
            'MIDDLE NAME',
            'EXT',
            'PLACE OF BIRTH',
            'DATE OF BIRTH',
            'AGE',
            'SEX',
            'CIVIL STATUS',
            'CITIZENSHIP',
            'OCCUPATION',
            'Indicate if Labor/Employed,Unemployed,PWD,OFW,Solo Parent,Out of School Youth (OSY),
            Out of School Children (OSC),
            IP'
        ];
    }
}
