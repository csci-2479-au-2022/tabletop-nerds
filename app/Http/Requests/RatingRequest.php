<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
{

    // Determine if user is authorized to make this request

    // @return bool

    public function authorize()
    {
        return true;
    }

    // Get validation rules that apply to the request

    // @return array<string, mixed>

    public function rules()
    {
        return [
            'rating' => 'required|int|min:1|max:10',
            'review' => 'required|int|min:1',
        ];
    }
}
