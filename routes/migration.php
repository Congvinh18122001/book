<?php


use Illuminate\Support\Facades\Route;

Route::get('/inputStudent','migration\studentController@showInput')->name('input');
Route::post('/insertStudent','migration\studentController@insertStudent')->name('insert');
Route::get('/showStudent','migration\studentController@getStudent')->name('display');
Route::get('/deleteStudent/{rollno}','migration\studentController@deleteStudent')->name('deleteStd');


?>