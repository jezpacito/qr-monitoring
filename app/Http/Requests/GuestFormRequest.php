<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestFormRequest extends FormRequest
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
            'fname' =>'required',
            'lname' =>'required',
            'address'=>'required',
            'city'=>'required',
            'prk_brgy'=>'required',
            'contact_no'=>'required',
            'gender'=>'required',
            'postal_code'=>'required',
            'email'=>'required',
        ];
    }
}
