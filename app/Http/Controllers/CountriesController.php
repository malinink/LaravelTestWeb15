<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Countries;
use Request;


class CountriesController extends BaseController{
 
 public function index()
{
        $countries = Countries::all();
        return view('countries/countriesIndex',['countries' => $countries]);
        
}

public function create()
{
    return view('countries/countriesCreate');
    
}

public function store()
{
         $new = Request::only('identity', 'name', 'nameanime','language', 'area','year','sibling');
         $country = new Countries();
         $country->identity = $new['identity'];
         $country->name = $new['name'];
         $country->nameanime = $new['nameanime'];
         $country->language = $new['language'];
         $country->area = $new['area'];
         $country->year = $new['year'];
         $country->sibling = $new['sibling'];
         $country->save();
        
         return redirect('countries');  
}

public function show($id)
{
       $country = Countries::find($id);
       return view('countries/countriesShow')->with('country',$country);
   
}

public function edit($id)
{
         $country = Countries::find($id);
         return view('countries/countriesEdit')->with('country',$country);
    
}

public function update($id)
{
         $new = Request::only('identity', 'name', 'nameanime','language', 'area','year','sibling');
         $country = Countries::find($id);
         $country->identity = $new['identity'];
         $country->name = $new['name'];
         $country->nameanime = $new['nameanime'];
         $country->language = $new['language'];
         $country->area = $new['area'];
         $country->year = $new['year'];
         $country->sibling = $new['sibling'];
         $country->save();
      
        return redirect('countries');
}
     
public function destroy($id)
{
        $country=Countries::find($id);
        $country->delete();
        return redirect('countries');
     
}
 
 
}
