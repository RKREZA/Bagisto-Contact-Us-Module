<?php


Route::group(['middleware' => ['admin']], function () {

    Route::get('admin/contact', 'RKREZA\Contact\Http\Controllers\ContactController@index')
        ->defaults('_config', ['view' => 'contact_view::contact.index'])
        ->name('admin.contact.index');


    Route::get('admin/contact/view/{id}', 'RKREZA\Contact\Http\Controllers\ContactController@view')
        ->defaults('_config', ['view' => 'contact_view::contact.view'])
        ->name('admin.contact.view');


    Route::post('admin/contact/delete/{id}', 'RKREZA\Contact\Http\Controllers\ContactController@destroy')
        ->name('admin.contact.delete');


});



Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {

// Registration Routes
    
    Route::get('/contact', 'RKREZA\Contact\Http\Controllers\ContactController@show')
    		->defaults('_config', ['view' => 'contact_view::contact.shop.index'])
    		->name('shop.contact.index');
    
    Route::post('/contact', 'RKREZA\Contact\Http\Controllers\ContactController@sendMessage')
    		->defaults('_config',['redirect' => 'shop.contact.index'])
    		->name('shop.contact.send-message');




});