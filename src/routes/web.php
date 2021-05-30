<?php

Route::group(['middleware' => ['web', 'auth'], 'as' => 'sepehrgostar.LaravelClient.', 'prefix' => 'sepehrgostar/laravelClient', 'namespace' => 'Sepehrgostar\LaravelClient\Http\Controllers'], function () {

    Route::get('test/', 'main@index')->name('main.index');

    Route::group(['as' => 'ticket.', 'prefix' => 'ticket'], function () {

        Route::get('index','ticketController@index')->name('index');
        Route::get('create','ticketController@create')->name('create');
        Route::post('store','ticketController@store')->name('store');
        Route::get('show/{ticket_id}','ticketController@show')->name('show');
        Route::post('reply/{ticket_id}','ticketController@reply')->name('reply');
        Route::post('store/attach','ticketController@apiAttach')->name('store.attach');
        Route::get('download/attach','ticketController@downloadAttach')->name('download.attach');
        Route::get('uploaded/files','ticketController@uploadedFiles')->name('uploaded.files');
        Route::delete('delete/file/{id}','ticketController@deleteAttach')->name('delete.files');

        Route::post('sensitive','ticketController@storeSensitive')->name('sensitive');

    });

});
