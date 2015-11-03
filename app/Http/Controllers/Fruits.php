<?php
namespace App\Http\Controllers;

use Request;
use App\Fruit;
use App\Http\Controllers\Controller;

class Fruits extends Controller
{
    public function index()
    {
        $fruits = Fruit::all();
        
        return view('fruits.index', ['fruits' => $fruits]);
    }
    
    public function create()
    {
        return view('fruits.create');
    }
    
    public function store()
    {
        $request = Request::only('identity', 'name', 'color', 'weight');
        $fruit = new Fruit();
        $fruit->identity = $request['identity'];
        $fruit->name = $request['name'];
        $fruit->color = $request['color'];
        $fruit->weight = $request['weight'];
        $fruit->save();
        
        return redirect('fruits')->with('message', 'Fruit created successfully!');
    }
    
    public function show($id)
    {
        $fruit = Fruit::find($id);
        
        return view('fruits.show')->with('fruit', $fruit);
    }
    
    public function edit($id) 
    {
        $fruit = Fruit::find($id);
        
        return view('fruits.edit')->with('fruit', $fruit);
    }
    
    public function update($id)
    {   
        $new = Request::only('identity', 'name', 'color', 'weight');
        $fruit = Fruit::find($id);
        $fruit->identity = $new['identity'];
        $fruit->name = $new['name'];
        $fruit->color = $new['color'];
        $fruit->weight = $new['weight'];
        $fruit->save();
        
        return redirect('fruits')->with('message', 'Fruit updated!');
    }
    
    public function destroy($id)
    {
        $fruit = Fruit::find($id);
        $fruit->delete();
        
        return redirect('fruits')->with('message', 'Fruit deleted.');
    }
}
