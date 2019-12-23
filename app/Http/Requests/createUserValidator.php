<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class createUserValidator extends Request
{

  public function authorize()
  {
      return true;
  }

    public function rules()
    {
      return [
        'name' => 'required',
        'fname' => 'required',
        'address' => 'required',
        'postal_code' => 'required',
        'city' => 'required',
        'country' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'confirm_password' => 'required',
      ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
      {
      return [
          'name.required' => 'Please fill in the name field.',
          'fname.required' => 'Please fill in the fname field',
          'address.required' => 'Please fill in the address field.',
          'postal_code.required' => 'Please fill in the postal code field.',
          'city.required' => 'Please fill in the city field.',
          'country.required' => 'Please fill in the country field.',
          'password.required' => 'Please fill in the password field.'
          ];
       }
    }
}
