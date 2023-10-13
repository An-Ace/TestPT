<?php

namespace App\Http\Requests;

use App\Models\User;

class UpdateUserRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'modelNumber' => 'required|string|max:100',
            'productlabel' => 'required|string|max:100',
            'price' => 'required|number',
            'is_active' => 'required|boolean',
            'file' => 'nullable|mimes:pdf|min:100|max:500',
        ];
    }

}
