<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepares validated data.
     *
     * @return array
     */
    public function validated()
    {
        return [
            'log_type' => $this->input('log_type', 'S'),
        ];
    }
}
