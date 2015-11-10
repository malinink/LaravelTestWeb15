<?php

Route::get('/', function(){
    return view('welcome');
});


Route::get('countries/',[
    'as'=> 'countries.index',
    'uses'=>'CountriesController@index'
    ]);
Route::get('countries/create',[
    'as' => 'countries.create',
    'uses' => 'CountriesController@create'
    ]);
Route::get('countries/{id}',[
    'as' => 'countries.show',
    'uses' => 'CountriesController@show'
    ]);
Route::post('countries/',[
    'as'=> 'countries.store',
    'uses'=>'CountriesController@store'
    ]);
Route::get('countries/{id}/edit',[
    'as' => 'countries.edit',
    'uses' => 'CountriesController@edit'
    ]);
Route::put('countries/{id}',[
    'as' => 'countries.update',
    'uses' => 'CountriesController@update'
    ]);
Route::delete('countries/{id}',[
    'as' => 'countries.destroy',
    'uses' => 'CountriesController@destroy'
    ]);


Route::get('/fruits', ['as' => 'fruits.index', 'uses' => 'Fruits@index']);
Route::get('/fruits/create', ['as'  => 'fruits.create', 'uses' => 'Fruits@create']);
Route::post('/fruits', ['as' => 'fruits.store', 'uses' => 'Fruits@store']);
Route::get('/fruits/{id}', ['as' => 'fruits.show', 'uses' => 'Fruits@show']);
Route::get('/fruits/{id}/edit', ['as' => 'fruits.edit', 'uses' => 'Fruits@edit']);
Route::put('/fruits/{id}', ['as' => 'fruits.update', 'uses' => 'Fruits@update']);
Route::delete('/fruits/{id}', ['as' => 'fruits.destroy', 'uses' => 'Fruits@destroy']);


Route::get(
    'whale', ['as' => 'whale.index', 'uses' => 'Whales@index']
);
Route::get(
    'whale/create', ['as' => 'whale.create', 'uses' => 'Whales@create']
);
Route::post(
    'whale', ['as' => 'whale.store', 'uses' => 'Whales@store']
);
Route::get(
    'whale/{id}', ['as' => 'whale.show', 'uses' => 'Whales@show']
);
Route::get(
    'whale/{id}/edit', ['as' => 'whale.edit', 'uses' => 'Whales@edit']
);

Route::put(
    'whale/{id}', ['as' => 'whale.update', 'uses' => 'Whales@update']
);
Route::delete(
    'whale/{id}', ['as' => 'whale.destroy' , 'uses' => 'Whales@destroy']
);


// games

Route::get('games', [
    'as' => 'games',  'uses' => 'GamesController@index'
    ]);

Route::post('games', 'GamesController@store');

Route::get('games/create', [
    'as' => 'games.create', 'uses' => 'GamesController@create'
    ]);

Route::get('games/{id}', [
    'as' => 'games.show', 'uses' => 'GamesController@show'
    ]);

Route::post('games/{id}', [
    'as' => 'games.update', 'uses' => 'GamesController@update'
    ]);

Route::delete('games/{id}', [
    'as' => 'games.destroy', 'uses' => 'GamesController@destroy'
    ]);

Route::get('games/{id}/edit', [
    'as' => 'games.edit', 'uses' => 'GamesController@edit'
    ]);


Route::get('computers/', 'ComputersController@index');
Route::post('computers/', 'ComputersController@store');
Route::get('computers/create', 'ComputersController@create');
Route::get('computers/{id}', 'ComputersController@show');
Route::get('computers/{id}/edit', 'ComputersController@edit');
Route::post('computers/{id}','ComputersController@update');
Route::delete('computers/{id}', 'ComputersController@destroy');

Route::get('/cars', [
    'as'    => 'index',
    'uses'  => 'CarsController@index'
]);
Route::get('/cars/create', [
    'as'    => 'create',
    'uses'  => 'CarsController@create'
]);
Route::post('/cars', [
    'as'    => 'store',
    'uses'  => 'CarsController@store'
]);
Route::get('/cars/{car}', [
    'as'    => 'show',
    'uses'  => 'CarsController@show'
]);
Route::get('/cars/{car}/edit', [
    'as'    => 'edit',
    'uses'  => 'CarsController@edit'
]);
Route::put('/cars/{car}', [
    'as'    => 'update',
    'uses'  => 'CarsController@update'
]);
Route::delete('/cars/{car}', [
    'as'    => 'delete',
    'uses'  => 'CarsController@destroy'
]);
