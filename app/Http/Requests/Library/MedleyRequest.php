<?php

namespace App\Http\Requests\Library;

use Illuminate\Foundation\Http\FormRequest;

class MedleyRequest extends FormRequest
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
            //Medley properties
            'arrangement_type_id' => ['integer', 'required', 'exists:App\Models\Library\ArrangementType,id'],
            'subtitle' => ['string', 'nullable'],
            'title' => ['string', 'required'],
            //Composition properties
            'item-arrangement_type_id' => ['integer','nullable'],
            'item-subtitle' => ['string','nullable'],
            'item-title' => ['string','nullable'],
        ];
    }
}
