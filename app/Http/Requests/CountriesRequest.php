<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CountriesRequest extends Request
{
    /**
    * function - get rules
    *
    * @return     massive
    */
    public function rules()
    {
        return[
                'identity'  => 'Required|Unique:countries',
                'name'      => 'Required|Min:3|Max:80',
                'nameanime' => 'Required|Min:3|Max:80',
                'language'  => 'Required|Min:3|Max:80',
                'area'      => 'Integer|Min:1',
                'year'      => 'Integer|Min:1',
                'sibling'   => 'Required|Min:3|Max:80'
                ];
    }
}
