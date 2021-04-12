<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MakeDonationRequest extends FormRequest
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
        return [
            'name' => ['required', 'max:150', 'min:5', 'string'],
            'email' => ['required', 'email', 'max:150', 'min:5'],
            'country' => ['required', 'max:150', 'min:5', 'string'],
            'trees_num' => ['nullable', 'numeric', 'min:1', 'max:50'],
            'trees' => ['nullable', 'array'],
            'donation_total' => ['nullable', 'numeric', 'min:20', 'max:100000'],
            'donation_type' => ['required', Rule::in(['simple_don', 'photo_don', 'org_don']), 'string'],
            'payment_platform' => ['required', Rule::in(['paypal', 'stripe']), 'string'],
            'paymentMethod' => ['nullable']
        ];
    }
}
