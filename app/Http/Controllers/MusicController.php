<?php



namespace App\Http\Controllers;

use Request;
use \App\Music;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $music=  Music::all();
        //return $music;
        return view('music.index', compact('music'));
        
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
    public function store()
    {
        
        $input = Request::all();
        Music::create($input);
        return redirect()->route('music.index');
        
    }
    
    public function show($id)
    {
        $music = Music::findOrFail($id);
        return view('music.show', compact('music'));
    }
    public function edit($id)
    {
        $music = Music::findOrFail($id);
        return view('music.edit', compact('music'));
    }
    public function update($id)
    {
        $music = Music::findOrFail($id);
        $input = Request::all();
        $music->update($input);
        return redirect()->route('music.index');
    }
    public function destroy($id)
    {
        $music = Music::findOrFail($id);
        $input = Request::all();
        $music->delete($input);
        return redirect()->route('music.index');
    }
}
