<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateCounterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $counter_id = $this->counter_id;
        return [
            'act' => 'required|min:3|max:35', Rule::unique('contador')->ignore($counter_id),'act',
            'cont' => 'numeric'
        ];
    }
}
