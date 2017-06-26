<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/api/supplier/{id?}', 'SupplierController@index');
Route::post('/api/supplier', 'SupplierController@store');
Route::post('/api/supplier/{id}', 'SupplierController@update');
Route::delete('/api/supplier/{id}', 'SupplierController@destroy');