<?php

namespace App\Http\Requests;

class UpdateAvatarRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'file' => 'required|mimes:pdf|min:100|max:500',
        ];
    }
}
