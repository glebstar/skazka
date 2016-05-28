<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminCmsSaveRequest extends Request
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
            'path'    => 'required|max:70|not_in:admin|regex:/^[a-z][a-z\-0-9\/]+[a-z]$/',
            'title'   => 'required|max:100',
            'sort'    => 'required|integer|min:1|max:5000',
            'is_main' => 'required|boolean'
        ];
    }
}
