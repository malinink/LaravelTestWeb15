<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

/**
 * Description of Cars
 *
 * @author bubrick
 */
class CarsController extends Controller 
{
    public function index()
    {
        return view('cars.index');
    }
    public function create()
    {
        return view('cars.create');
    }
    public function store()
    {
        return view('cars.store');
    }
    public function show()
    {
        return view('cars.show');
    }
    public function edit()
    {
        return view('cars.edit');
    }
    public function update()
    {
        return view('cars.update');
    }
    public function destroy()
    {
        return view('cars.destroy');
    }
}
