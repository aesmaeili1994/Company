<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatePostRequest extends FormRequest
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
            'image'=>'image|mimes:jpg,jpeg,png|max:5000',
            'alt'=>'required|max:100',
            'subject'=>'required|max:100',
            'body'=>'required',
            'title'=>'required|max:200',
            'author'=>'required|max:200',
            'keywords'=>'required|max:1000',
            'description'=>'required|max:1000'
        ];
    }
}
