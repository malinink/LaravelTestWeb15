<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Request;
use App\Computer;

class ComputersController extends BaseController{
 
    public function index()
    {
        $comps = Computer::all();
        return view('Computers.index', ['title' => 'Main page', 'comps' => $comps]);
    }

    public function create()
    {
        return view('Computers.create', ['title' => 'Create']);
    }

    public function store()
    {
        $request = Request::only('mark', 'model', 'price', 'index_of_storage');
        $comp = new Computer();
        $comp->mark = $request['mark'];
        $comp->model = $request['model'];
        $comp->price = $request['price'];
        $comp->index_of_storage = $request['index_of_storage'];
        $comp->save();
        
        return redirect('computers');
    }

    public function show($id) 
    { 
        $comp = Computer::find($id);
        
        return view('Computers.show', ['title' => 'Show','comp' => $comp]);
    }

    public function edit($id) 
    {        
        $comp = Computer::find($id);
        
        return view('Computers.edit', ['title' => 'Edit', 'comp' => $comp]);
    }

    public function update($id) 
    {
        $request = Request::only('mark', 'model', 'price', 'index_of_storage');
        $comp = Computer::find($id);
        $comp->mark = $request['mark'];
        $comp->model = $request['model'];
        $comp->price = $request['price'];
        $comp->index_of_storage = $request['index_of_storage'];
        $comp->save();
        
        return redirect('computers');
    
    }

    public function destroy($id) 
    {
        $comp = Computer::find($id);
        $comp->delete();
        
        return redirect('computers');
    }
}