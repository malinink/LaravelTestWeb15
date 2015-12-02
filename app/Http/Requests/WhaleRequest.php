<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WhaleRequest extends Request
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
        'identity'  => 'required|unique:whales',
        'firstname' => 'required|string',
        'lastname'  => 'required|string',
        'sex'       => 'required',
        'fruit'     => 'required|string',
        'hobby'     => 'required|string',
        'food_list' => 'required'   
        ];
    }
}
