<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodRequest extends FormRequest
{
    public function rules()
    {
      $tm=config('namer.titleMax');
      $fm=config('namer.discriptionMax');
        return [
        'title' => "required|string|max:$tm",
        'description' =>"required|string|max:$fm",
        'price' => 'required|integer',
        'image' => 'nullable',
        ];
    }
}
