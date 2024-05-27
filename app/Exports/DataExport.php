<?php

namespace App\Exports;

use App\Models\Resident;
use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;
class DataExport implements FromCollection, WithHeadings
{
    protected $filters;

    public function __construct($filters)
    {
        $this->filters = $filters;
    }

    public function collection()
    {
        $residentQuery = Resident::whereIn('status', ['Resident', 'Restricted']);
        $memberQuery = Member::whereIn('status', ['Resident', 'Restricted']);

        // Apply filters to the Resident query
        if ($this->filters['name']) {
            $residentQuery->where(function ($query) {
                $query->where('lname', 'like', '%' . $this->filters['name'] . '%')
                      ->orWhere('fname', 'like', '%' . $this->filters['name'] . '%')
                      ->orWhere('mname', 'like', '%' . $this->filters['name'] . '%');
            });
        }

        if (!empty($this->filters['maxage']) && !empty($this->filters['minage'])) {
            $residentQuery->whereBetween('age', [$this->filters['minage'], $this->filters['maxage']]);
        }

        if ($this->filters['address']) {
            $residentQuery->where('address', 'like', '%' . $this->filters['address'] . '%');
        }

        if (!empty($this->filters['voters']) && $this->filters['voters'] === 'Voters') {
            $residentQuery->whereNotNull('voters_filename');
        }else if (!empty($this->filters['voters']) && $this->filters['voters'] === 'Non-Voters') {
            $residentQuery->whereNull('voters');
        }


        if ($this->filters['sex'] && $this->filters['sex'] !== 'All') {
            $residentQuery->where('gender', $this->filters['sex']);
        }

        if ($this->filters['status'] && $this->filters['status'] !== 'All') {
            $residentQuery->where('status', $this->filters['status']);
        }

        // Apply the same filters to the Member query
        if ($this->filters['name']) {
            $memberQuery->where(function ($query) {
                $query->where('lname', 'like', '%' . $this->filters['name'] . '%')
                      ->orWhere('fname', 'like', '%' . $this->filters['name'] . '%')
                      ->orWhere('mname', 'like', '%' . $this->filters['name'] . '%');
            });
        }

        if (!empty($this->filters['maxage']) && !empty($this->filters['minage'])) {
            $memberQuery->whereBetween('age', [$this->filters['minage'], $this->filters['maxage']]);
        }

        if ($this->filters['address']) {
            $memberQuery->where('address', 'like', '%' . $this->filters['address'] . '%');
        }

        if ($this->filters['sex'] && $this->filters['sex'] !== 'All') {
            $memberQuery->where('gender', $this->filters['sex']);
        }

        if (!empty($this->filters['voters']) && $this->filters['voters'] === 'Voters') {
            $memberQuery->whereNotNull('voters');
        }else if (!empty($this->filters['voters']) && $this->filters['voters'] === 'Non-Voters') {
            $memberQuery->whereNull('voters');
        }
        

        if ($this->filters['status'] && $this->filters['status'] !== 'All') {
            $memberQuery->where('status', $this->filters['status']);
        }

        $residentData = $residentQuery->select(
            'lname',
            'fname',
            'mname',
            'ext',
            'birth',
            'birthday',
            'age',
            'gender',
            'civil',
            'citizenship',
            'occupation',
            'indicate_if',
            'reg_number'
        )->get()->toArray();

        $memberData = $memberQuery->select(
            'lname',
            'fname',
            'mname',
            'ext',
            'birthplace',
            'birthday',
            'age',
            'gender',
            'civil_status',
            'citizenship',
            'occupation',
            'indicate_if'
        )->get()->toArray();

        $mergedData = array_merge($residentData, $memberData);

        $mergedCollection = collect($mergedData);

        $sortedCollection = $mergedCollection->sortBy('reg_number');

        $sortedCollection->transform(function ($item) {
            unset($item['reg_number']);
            return $item;
        });

        $cleanedCollection = $sortedCollection->map(function ($item) {
            $values = explode(',', $item['indicate_if']);
            $values = array_filter(array_map('trim', $values), function ($value) {
                return $value !== 'null';
            });
            $item['indicate_if'] = implode(', ', $values);
            return $item;
        })->filter(function ($item) {
            return !empty($item['indicate_if']);
        });

        return $cleanedCollection;
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
            'Indicate if Labor/Employed, Unemployed, PWD, OFW, Solo Parent, Out of School Youth (OSY), Out of School Children (OSC), IP'
        ];
    }
}
