<?php

namespace App\Http\Requests;

use App\Http\Requests\LogRequest as FormRequest;
use Carbon\Carbon;

class StoreLogRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'log_type' => 'required',
        ];
    }

    /**
     * Prepares valid data.
     *
     * @return array
     */
    public function data()
    {
        return [
            'log_type' => $this->input('log_type', 'start'),
            'timestamp' => time(),
        ];
    }
}
