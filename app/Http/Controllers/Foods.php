<?php

namespace App\Http\Controllers;

use App\Food;
use App\Http\Requests\WhaleRequest;
use Illuminate\Http\Request as BaseRequest;
use Illuminate\Support\Facades\Input;
use Request;

class Foods extends Controller
{
    
    /**
     * Just return list
     *
     * @return main page
     */
    public function index()
    {
        $foods = Food::all();
        return view('food.panel', compact('foods'));
    }
    
    /**
     * Return page with empty fields for creating new model
     *
     * @return create page
     */
    public function create()
    {
        return view('food.create');
    }
    
    /**
     * Store new model and redirect
     *
     * @param WhaleRequest $request data from form
     *
     * @return main page
     *
     */
    public function store()
    {
        Food::create(Request::all());
        
        \Session::flash('flash_message', 'New position has been added!');
        return redirect('food');
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
        $object = Food::findOrFail($id);
   
        return view('food.show')->with('object', $object);
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
        return view('food.edit')->with('food', Food::find($id));
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
    public function update($id)
    {
        
        $new = Request::all();
        $old = Food::findOrFail($id);
        $old->update($new);
        \Session::flash('flash_message', 'This position has been updated!');
        return redirect('food');
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
        $object = Food::find($id);
        $object->delete();
        \Session::flash('flash_message', 'This position has been deleted :(');
        return redirect('food');
    }
}
