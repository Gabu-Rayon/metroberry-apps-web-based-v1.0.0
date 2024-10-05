<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Phone implements Rule
{
    public function passes($attribute, $value)
    {
        // Validate the phone number format (you can adjust this regex)
        return preg_match('/^[0-9]{10}$/', $value); 
    }

    public function message()
    {
        return 'The :attribute must be a valid phone number.';
    }
}