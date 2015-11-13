<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FootballClubsController extends BaseController{
    
    public function index() {
        return view('FootballClubs.index');
    }
    
    public function create(){
        return view('FootballClubs.create');
    }
    
    public function store() {
        return view('FootballClubs.store');
    }
    public function show() {
        return view('FootballClubs.show');
    }
    public function edit() {
        return view('FootballClubs.edit');
    }
    public function update() {
        return view('FootballClubs.update');
    }
    public function destroy() {
        return view('FootballClubs.destroy');
    }
}

