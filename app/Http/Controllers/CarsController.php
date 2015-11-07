<?php

namespace App\Http\Controllers;

use App\Car;
use Request;
use Illuminate\Support\Facades\Input;

/**
 * Description of Cars
 *
 * @author bubrick
 */
class CarsController extends Controller 
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }
    public function create()
    {
        return view('cars.create');
    }
    public function store()
    {
        $new = Request::only('identity', 'brand', 'model', 'color');
        $car = Car::create($new);
        return redirect('cars');
    }
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show')->with(['car' => $car]);
    }
    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit')->with(['car' => $car]);
    }
    public function update($id)
    {
        $new = Request::only('identity', 'brand', 'model', 'color');
        $old = Car::find($id);
        $old->update($new);
        return redirect('cars');
    }
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('cars');
    }
}
