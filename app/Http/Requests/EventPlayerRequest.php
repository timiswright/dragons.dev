<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventPlayerRequest extends Request
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
          $rules = [
            'availability_notes' => '',
          ];
        
          foreach($this->request->get('availability_notes') as $key => $val)
          {
            $rules['availability_notes.'.$key] = 'required_if:availability.'.$key.',3|min:4';
          }
        
          return $rules;
        }

    public function messages()
        {
          $messages = [];
          foreach($this->request->get('availability_notes') as $key => $val)
          {
            $messages['availability_notes.'.$key.'.max'] = 'The field '.$key.'" has an error.';
          }
          return $messages;
        }
}
