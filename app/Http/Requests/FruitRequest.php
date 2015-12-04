<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class FruitRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     * 
     * @return boolean
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
            'identity' => 'required|integer|unique:fruits,identity,'.$this->id,
            'name' => 'required|alpha',
            'color' => 'required|alpha',
            'weight' => 'required|numeric',
            'price' => 'required|numeric',
            'collectors' => 'required',
        ];
    }
}
