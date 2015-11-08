<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Sports extends BaseController
{
    public function index()
	{
		return view('sports.index');
	}

    public function create()
	{
		return view('sports.create');
	}

    public function store()
	{
		return view('sports.store');
	}

    public function show($id)
	{
		return view('sports.show', compact('id'));
	}

    public function edit($id)
	{
		return view('sports.edit', compact('id'));
	}

    public function update($id)
	{
		return view('sports.update', compact('id'));
	}

    public function destroy($id)
	{
		return view('sports.destroy', compact('id'));
	}
}