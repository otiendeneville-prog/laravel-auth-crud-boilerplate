<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class storeIdeaRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description.required'=>'Come on dude give me something'
        ];
    }
}
