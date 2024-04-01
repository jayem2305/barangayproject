<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckAtLeastOneCheckbox implements Rule
{
    protected $checkboxGroup;

    public function __construct($checkboxGroup)
    {
        $this->checkboxGroup = $checkboxGroup;
    }

    public function passes($attribute, $value)
    {
        // Check if at least one checkbox in the group is checked
        foreach ($this->checkboxGroup as $checkbox) {
            if (request()->has($checkbox)) {
                return true;
            }
        }

        return false;
    }

    public function message()
    {
        return 'Please check at least one option from the group.';
    }
}
