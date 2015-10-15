<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventRequest extends Request
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
        'id' => 'required',
        'sheet_date' => '',
        'team_home' => '',
        'team_away' => '',
        'date' => 'required',
        'shirts' => '',
        'socks' => '',
        'push_back' => '',
        'meet_time' => '',
        'meet_venue' => '',
        'umpire_1' => '',
        'umpire_2' => '',
        ];
    }
}
