<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');


Route::get('/tickets', 'TicketsController@index');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets/{slug?}', 'TicketsController@show');
Route::get('/tickets/{slug?}/edit', 'TicketsController@edit');
Route::post('/tickets/{slug?}/edit', 'TicketsController@update');
Route::post('/tickets/{slug?}/delete', 'TicketsController@destroy');

Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );

    \Mail::send('emails.welcome', $data, function ($message) {

        $message->from('soporte@novafoods.cl', 'Learning Laravel');

        $message->to('soporte@novafoods.cl')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";

});