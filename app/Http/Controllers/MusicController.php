<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('music.music');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('music.create');
    }
    public function edit()
    {
        return view('music.edit');
    }
    public function show()
    {
        return view('music.show');
    }
    public function store()
    {
        return view('music.store');
    }
    public function update()
    {
        return view('music.update');
    }
    public function destroy()
    {
        return view('music.destroy');
    }
    
    
    
    
}
