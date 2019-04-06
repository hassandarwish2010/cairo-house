<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
          'en_title' => 'required|string|max:191|min:2',
          'ar_title' => 'required|string|max:191|min:2',
          'image' => 'image',
          'en_description' => 'required|min:2|max:191',
          'ar_description' => 'required|min:2|max:191',
      ];
    }
}
