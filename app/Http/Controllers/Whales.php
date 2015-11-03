<?php 

namespace App\Http\Controllers;

use App\Whale;
use Request;
use Illuminate\Support\Facades\Input;

class Whales extends Controller {

public function index()
{
    $whales = Whale::all();
    return view('whale.panel',compact('whales'));
}

public function create()
{
    return view('whale.create');
}
public function store()
{
    $data = Request::only('id','firstName','lastName','sex');
    $object = new Whale();
    $object->identity = $data['id'];
    $object->firstname = $data['firstName'];
    $object->lastname = $data['lastName'];
    $object->sex = $data['sex'];
    $object->save();
    
    return redirect('whale');
}
public function show($id)
{
    $object = Whale::find($id);
   
    return view('whale.show')->with('object',$object);
}
public function edit($id)
{
    return view('whale.edit')->with('whale',Whale::find($id));
}
public function update($id)
{
    $new = Request::only('identity','firstname','lastname','sex');
    $old = Whale::find($id);
    $old->identity = $new['identity'];
    $old->firstname = $new['firstname'];
    $old->lastname = $new['lastname'];
    $old->sex = $new['sex']; 
    $old->save();
    
    return redirect('whale');
}
public function destroy($id)
{
    $object = Whale::find($id);
    $object->delete();
    
    return redirect('whale');
}
}