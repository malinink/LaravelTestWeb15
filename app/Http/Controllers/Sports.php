<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Sport;
use Request;

class Sports extends BaseController
{
    public function index()
    {
        $sports = Sport::all();
        return view('sports.index', ['sports' => $sports]);
    }

    public function create()
    {
        return view('sports.create');
    }

    public function store()
    {
        $new = Request::only('identity', 'name', 'count');
        $sport = Sport::create($new);
        return redirect('sports');
    }

    public function show($id)
    {
        $sport= Sport::find($id);
        return view('sports.show')->with(['sport' => $sport]);
    }

    public function edit($id)
    {
        $sport = Sport::find($id);
        return view('sports.edit')->with(['sport' => $sport]);
    }

    public function update($id)
    {
        $new = Request::only('identity', 'name', 'count');
        $old = Sport::find($id);
        $old->update($new);
        return redirect('sports');
    }

    public function destroy($id)
    {
        $sport = Sport::find($id);
        $sport->delete();
        return redirect('sports');
    }
}
