<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest
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
        $admin_id = $this->admin_id;
        return [
            'name' => 'required|min:3|max:35',
            'email' => 'required',Rule::unique('admins')->ignore($admin_id),'email',
            'password' => 'required|confirmed'
        ];
    }
}
