<?php

use Illuminate\Support\Facades\Route;
Route::group(['prefix'=>'book'],function(){
    Route::get('/inputbook','book\bookController@inputbook')->name('inputBook');
Route::get('/inputcategory','book\bookController@inputcategory')->name('inputCategory');

Route::get('/displaybook','book\bookController@displaybook')->name('displayBook');
Route::get('/displaybookofcategory/{id}','book\bookController@displaybookofcategory');
Route::post('/serchBook','book\bookController@serchbook')->name('serch');
Route::post('/insertbook','book\bookController@insertbook')->name('insertbook');
Route::any('/editBook/{id}','book\bookController@editBook');
Route::any('/deletebook/{id}','book\bookController@deletebook');


Route::get('/displaycategory','book\bookController@displaycategory')->name('displayCategory');
Route::get('/displaycategoryofid/{id}','book\bookController@displaycategoryofid');
Route::post('/insertcategory','book\bookController@insertcategory')->name('insertcategory');
Route::any('/editcategory/{id}','book\bookController@editCategory');
Route::any('/deletecategory/{id}','book\bookController@deletecategory');


Route::get('/main','book\bookController@viewmain')->name('main');
Route::get('/main','book\bookController@dataFormain')->name('main');
Route::post('/mainsearch','book\bookController@searchbook')->name('mainsearch');
Route::get('/mainbookofcategory/{id}','book\bookController@mainbookofcategory');
Route::get('/bookdetail/{href_param}.html','book\bookController@bookDetail');


});
?>