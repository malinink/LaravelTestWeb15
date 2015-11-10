<?php 

namespace App\Http\Controllers;

use App\Whale;
use App\Http\Requests\whaleRequest;
use Illuminate\Http\Request as BaseRequest;
use Illuminate\Support\Facades\Input;
use Request;

class Whales extends Controller {
    
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
        return view('whale.create');
    }
    
    /**
     * Store new model and redirect
     * 
     * @param whaleRequest $request data from form
     * 
     * @return main page
     * 
     */
    public function store(whaleRequest $request )
    {
        $data = new Whale();
        $data['identity'] = $request['identity'];
        $data['firstname'] = $request['firstname'];
        $data['lastname'] = $request['lastname'];
        $data['sex'] = $request['sex'];
        $data['fruit'] = $request['fruit'];
        $data['hobby'] = $request['hobby'];
        $data->save();
        
        \Session::flash('flash_message', 'New whale has been added!');
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
        return view('whale.edit')->with('whale', Whale::find($id));
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
            $request, [
                   'identity' => 'required',
                   'firstname' => 'required|string',
                   'lastname' => 'required|string',
                   'sex' => 'required',
                   'fruit' => 'required|string',
                   'hobby' => 'required|string'
               ]
        );
        $new = Request::only(
            'identity', 'firstname', 'lastname', 'sex', 'fruit', 'hobby'       
        );    
        $old = Whale::findOrFail($id);
        $old->update($new);
        \Session::flash('flash_message', 'This whale has been updated!');
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
        \Session::flash('flash_message', 'This whale has been deleted :(');
        return redirect('whale');
    }
}