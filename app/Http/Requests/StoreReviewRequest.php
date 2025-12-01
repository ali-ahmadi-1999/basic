<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }


        public function messages(): array
    {
        return [
            'name.required' => 'لطفا نام را وارد کنید.',
            'position.required' => 'لطفا موقعیت را وارد کنید.',
            'image.image' => 'فایل انتخاب شده باید تصویر باشد.',
            'image.mimes' => 'فرمت تصویر باید jpg، jpeg، png یا webp باشد.',
            'image.max' => 'حجم تصویر نباید بیشتر از 2MB باشد.',
        ];
    }
}
