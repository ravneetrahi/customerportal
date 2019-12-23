<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class createAnnouncementValidator extends Request
{
  public function authorize()
    {
        return true;
    }

  public function rules()
    {
      return [
          'title' => 'required',
          'message' => 'required'
        ];
      }
    }
