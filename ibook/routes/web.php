<?php


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/about/all/{id}/update', 'App\Http\Controllers\AboutController@updateMessageSubmit')->name('about-update-submit');
Route::get('/about/all/{id}/update', 'App\Http\Controllers\AboutController@updateMessage')->name('about-update');

Route::get('/about/all/{id}/delete', 'App\Http\Controllers\AboutController@deleteMessage')->name('about-delete');

Route::get('/about/all/{id}', 'App\Http\Controllers\AboutController@showOneMessage')->name('about-data-one');
Route::get('/about/all', 'App\Http\Controllers\AboutController@allData')->name('about-data');
Route::post('/about/submit', 'App\Http\Controllers\AboutController@submit')->name('about-submit');