<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'comment' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'rating' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Field required.',
            'img.image' => 'File must an image.',
            'img.mimes' => 'File must be jpeg, png, jpg, gif, wep.'
        ];
    }
}
