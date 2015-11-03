<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class ComputersController extends BaseController{
 
    public function index() {
        return view('Computers.index');
    }

    public function create() {
        return view('Computers.create');
    }

    public function store() {
        return view('Computers.store');
    }

    public function show() {
        return view('Computers.show');
    }

    public function edit() {
        return view('Computers.edit');
    }

    public function update() {
        return view('Computers.update');
    }

    public function destroy() {
        return view('Computers.destroy');
    }
}
