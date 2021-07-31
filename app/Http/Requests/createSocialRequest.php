<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSocialRequest extends FormRequest
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
            'telegram'=>'nullable|max:200|url',
            'instagram'=>'nullable|max:200|url',
            'linkdin'=>'nullable|max:200|url',
            'twitter'=>'nullable|max:200|url'
        ];
    }
}
