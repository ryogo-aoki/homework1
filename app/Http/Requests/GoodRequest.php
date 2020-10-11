<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodRequest extends FormRequest
{
    public function rules()
    {
        return [
          'title' => 'required|string|max:100',
          'description' =>'required|string|max:500',
          'price' => 'required|integer',
          'image' => 'nullable|string',
        ];
    }
}
