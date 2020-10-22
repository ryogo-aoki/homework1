<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodRequest extends FormRequest
{
    public function rules()
    {
      $title_max_length=config('namer.titleMax');
      $discription_max_length=config('namer.discriptionMax');
        return [
        'title' => "required|string|max:$title_max_length",
        'description' =>"required|string|max:$discription_max_length",
        'price' => 'required|integer',
        'image' => 'nullable',
        ];
    }
}
