<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            // 'genres' => 'required',
            'release_year' => 'required',
            'description' => 'nullable',
            // 'developer' => 'required|string',
            // 'platforms' => 'required',
            "crossplay" => "required|boolean",
            // "languages" => "required",
            "online" => "required|boolean",
            "price" => "required|numeric",
            // "cover" => "required|url"
            'image' => 'nullable|image|max:2048',
        ];
    }
}
