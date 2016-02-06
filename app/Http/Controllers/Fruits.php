<?php
namespace App\Http\Controllers;

use App\Http\Requests\FruitRequest;
use App\Fruit;
use App\Collector;
use App\Http\Controllers\Controller;

class Fruits extends Controller
{
    /**
     * Show main page with all fruits.
     *
     * @return View
     */
    public function index()
    {
        $fruits = Fruit::all();
        
        return view('fruits.index', ['fruits' => $fruits]);
    }
    
    /**
     * Show page with forms for creating a fruit.
     *
     * @return View
     */
    public function create()
    {
        $collectors = Collector::all()->where('active', '1')->lists('name', 'id');
        return view('fruits.create', ['collectors' => $collectors]);
    }
    
    /**
     * Store new fruit and redirect.
     *
     * @param FruitRequest $request
     * @return Redirect
     */
    public function store(FruitRequest $request)
    {   
        $CollectorId = $request->input('collectors_list');
        Fruit::create($request->except(['collectors_list']))
            ->collectors()
            ->attach($CollectorId);
        
        return redirect('fruits')->with('message', 'Fruit created successfully!');
    }
    
    /**
     * Show the specifid fruit.
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        $fruit = Fruit::find($id);
        
        return view('fruits.show')->with('fruit', $fruit);
    }
    
    /**
     * Show page with forms to edit specified fruit.
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $fruit = Fruit::find($id);
        $involvedCollectors = $fruit->collectors->where('active', '0');
        $activeCollectors = Collector::all()->where('active', '1');
        $collectors = $activeCollectors->merge($involvedCollectors)->lists('name', 'id')->all();
        return view('fruits.edit')->with(['fruit'=> $fruit, 'collectors' => $collectors]);
    }
    
    /**
     * Update the fruit.
     *
     * @param FruitRequest $request
     * @param int $id
     * @return Redirect
     */
    public function update(FruitRequest $request, $id)
    {
        Fruit::find($id)->update($request->except(['collectors_list']));
        Fruit::find($id)->collectors()->sync($request->input('collectors_list'));
        
        return redirect('fruits')->with('message', 'Fruit updated!');
    }
    
    /**
     * Delete specified fruit.
     *
     * @param int $id
     * @return Redirect
     */
    public function destroy($id)
    {
        Fruit::find($id)->delete();
        
        return redirect('fruits')->with('message', 'Fruit deleted.');
    }
}
