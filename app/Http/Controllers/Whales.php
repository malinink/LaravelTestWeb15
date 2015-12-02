<?php

namespace App\Http\Controllers;

use App\Whale;
use App\Food;
use App\Http\Requests\WhaleRequest;
use Illuminate\Http\Request as BaseRequest;
use Illuminate\Support\Facades\Input;
use Request;
use Session;

class Whales extends Controller
{
    
    /**
     * Just return list
     *
     * @return main page
     */
    public function index()
    {
        $whales = Whale::all();
        return view('whale.panel', compact('whales'));
    }
    
    /**
     * Return page with empty fields for creating new model
     *
     * @return create page
     */
    public function create()
    {
        $foods = Food::lists('name', 'id');
        return view('whale.create', compact('foods'));
    }
    
    /**
     * Store new model and redirect
     *
     * @param WhaleRequest $request data from form
     *
     * @return main page
     *
     */
    public function store(WhaleRequest $request)
    {
        $whale = Whale::create($request->except('food_list'));
        $foodsId = $request->input('food_list', []);
        $whale->foods()->attach($foodsId);
        Session::flash('flash_message', 'New whale has been added!');
        return redirect('whale');
    }
    
    /**
     * Return page with this id
     *
     * @param type $id current number
     *
     * @return id page
     *
     */
    public function show($id)
    {
        $object = Whale::find($id);
   
        return view('whale.show')->with('object', $object);
    }
    
    /**
     * Return page for updating
     *
     * @param type $id current number
     *
     * @return edit page
     */
    public function edit($id)
    {
        $foods = Food::lists('name', 'id');
        $whale = Whale::find($id);
        return view('whale.edit', compact('whale', 'foods'));
    }
    /**
     * Store updating model and redirect
     *
     * @param type $id current number
     *
     * @param type $request data from form
     *
     * @return main page
     */
    public function update($id, BaseRequest $request)
    {
        $this->validate(
            $request,
            [
                'identity'  => 'required',
                'firstname' => 'required|string',
                'lastname'  => 'required|string',
                'sex'       => 'required',
                'fruit'     => 'required|string',
                'hobby'     => 'required|string',
                'food_list' => 'required'
            ]
        );
        $new = Request::only(
            'identity',
            'firstname',
            'lastname',
            'sex',
            'fruit',
            'hobby'      
        );
        $old = Whale::findOrFail($id);
        $old->update($new);
        $foodsId = $request->input('food_list', []);
        $old->foods()->sync($foodsId);
        Session::flash('flash_message', 'This whale has been updated!');
        return redirect('whale');
    }
    /**
     * Delete id model and redirect
     *
     * @param type $id current number
     *
     * @return main page
     */
    public function destroy($id)
    {
        $object = Whale::find($id);
        $object->delete();
        Session::flash('flash_message', 'This whale has been deleted :(');
        return redirect('whale');
    }
}
