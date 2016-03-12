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
        $id='1';
        return view('music.music')->with('id', $id);
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
    public function edit($id)
    {
        return view('music.edit');
    }
    public function show($id)
    {
        
        return view('music.show');
    }
    public function store()
    {
        return view('music.store');
    }
    public function update($id)
    {
        return view('music.update');
    }
    public function destroy($id)
    {
        return view('music.destroy');
    }
}
