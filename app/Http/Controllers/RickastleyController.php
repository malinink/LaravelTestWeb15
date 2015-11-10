<?php

namespace App\Http\Controllers;

use App\Rickastley;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RickastleyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rickastley = Rickastley::all();

        return view('rickastley.index', [
            'rickastley' => $rickastley
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rickastley.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $identity = $request->input('identity');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $rate = $request->input('rate');

        $new = Rickastley::create([
            'identity' => $identity,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'rate' => $rate
        ]);
        $new->save();

        return redirect()->route('rickastley.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rick = Rickastley::find($id);
        return view('rickastley.show', [
            'rick' => $rick
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rick = Rickastley::find($id);
        return view('rickastley.edit', [
            'rick' => $rick
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $identity = $request->input('identity');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $rate = $request->input('rate');

        $obj = Rickastley::find($id);
        $obj->identity = $identity;
        $obj->firstname = $firstname;
        $obj->lastname = $lastname;
        $obj->rate = $rate;
        $obj->save();

        return redirect()->route('rickastley.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rickastley::destroy($id);
        return redirect()->route('rickastley.index');
    }
}
