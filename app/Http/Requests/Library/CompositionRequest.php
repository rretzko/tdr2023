<?php

namespace App\Http\Requests\Library;

use App\Models\Library\ArrangementType;
use Illuminate\Foundation\Http\FormRequest;

class CompositionRequest extends FormRequest
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
     * A new composition will have either a selected arrangement_type tag selected or
     * a new arrangement_type to add, but not both.
     * The new arrangement_type takes precedence
     * @return void
     */
    protected function prepareForValidation()
    {
        if(is_numeric($this->tagid) &&
            (bool)ArrangementType::find($this->tagid) &&
            strlen($this->new_arrangement_type)) {

            $this->merge(['arrangement_type' => $this->new_arrangement_type]);

        }elseif(strlen($this->new_arrangement_type)){

            $this->merge(['arrangement_type' => $this->new_arrangement_type]);

        }elseif(is_numeric($this->tagid) && (bool)ArrangementType::find($this->tagid)){

            $this->merge(['arrangement_type' => $this->tagid]);

        }else{

            $this->merge(['arrangement_type' => null]);
        }
    }

    public function messages()
    {
        return [
            'arrangement_type.required' => 'A current arrangement type must be selected or a new arrangement type entered.',
            'arrangement_type.string' => 'A current arrangement type must be selected or a new arrangement type entered.',
            'title.required' => 'A title is required.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'arrangement_type' => ['string','required'],
            'subtitle' => ['string', 'nullable'],
            'title' => ['string','required'],
        ];
    }
}
