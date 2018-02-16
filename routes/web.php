<?php


//Wallcontroller actions
Route::get('/', 'Page\\WallmessageController@index')->name('index');
Route::post('/', 'Page\\WallmessageController@store');


Route::get('logout', 'Auth\\LoginController@logout');
Auth::routes();

//wallcontroller ajax rule actions
Route::delete('destroy', 'Page\\WallmessageController@destroy')->middleware('role');
Route::put('update', 'Page\\WallmessageController@update')->middleware('role');

//any page no found
Route::get('/{pageNotFount}', function() {
    return view('Errors.404');
});


