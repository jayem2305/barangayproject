<?php

namespace App\Rules;

use App\Models\Resident;
use App\Models\Member;
use Illuminate\Contracts\Validation\Rule;

class UniqueNameCombination implements Rule
{
    public function passes($attribute, $value)
    {
        $lname = request()->input('lname');
        $fname = request()->input('fname');
        $mname = request()->input('mname');
        $ext = request()->input('ext');

        $query = Resident::where('lname', $lname)
            ->where('fname', $fname);
        // Check if mname is not empty, then add it to the query
        if ($mname !== null) {
            $query->where('mname', $mname);
        } else {
            $query->whereNull('mname');
        }
        if ($ext !== null) {
            $query->where('ext', $ext);
        } else {
            $query->whereNull('ext');
        }

        $count = $query->count();

        return $count === 0;
    }

    public function message()
    {
        return 'The combination of Name is already exists.';
    }
}
