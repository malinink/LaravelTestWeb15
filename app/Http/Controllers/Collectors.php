<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collector;
use App\Http\Controllers\Controller;

class Collectors extends Controller
{
    public function index()
    {
        $collectors = Collector::all();
     
        return view('collectors.index', ['collectors'=> $collectors]);
    }
    
    public function create()
    {
        return view('collectors.create');
    }
    
    public function store(Request $request)
    {
        Collector::create($request->only('name'));
        return redirect('collectors/create');
    }
    
    public function show($id)
    {
        return view('collectors.show')->with('collector', Collector::find($id));
    }
    
    public function edit($id)
    {
        return view('collectors.edit')->with('collector', Collector::find($id));
    }
    
    public function update(Request $request, $id)
    {
        Collector::find($id)->update($request->only('name'));
        return redirect('collectors');
    }
    
    public function destroy($id)
    {
        Collector::find($id)->delete();
        return redirect('collectors');
    }
}
