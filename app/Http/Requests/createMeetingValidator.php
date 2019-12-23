<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class createMeetingValidator extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          'meetings_subject' => 'required',
    			'meetings_message' => 'required'
        ];
    }

    public function messages()
    {
      {
      return [
          'meetings_subject.required' => 'Please fill in the subject field.',
          'meetings_message.required' => 'Please fill in the message field'
          ];
       }
    }
}
