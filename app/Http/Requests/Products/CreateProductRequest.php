<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'category_id'=> ['required', 'exists:categories,id'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
        ];
    }
}
