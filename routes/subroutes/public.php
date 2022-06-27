<?php

Route::middleware(['web', 'metadata'])->group(function () {

    Route::group(['namespace' => 'App\Http\Controllers\Site'], function(){

        Route::get('/', 'HomepageController@index')->name('homepage');
        Route::get('results', 'SearchEngineController@search')->name('results');

        Route::get('about', function () {
            return view('content.public.pages.about');
        })->name('about');

        Route::get('contact', function () {
            return view('content.public.pages.contact');
        })->name('contact');

    });

    Route::group(['prefix' => 'categories', 'namespace' => 'App\Http\Controllers\Site\Categories'], function(){
        Route::get('/', 'CategoriesController@index')->name('categories');

        Route::group(['prefix' => 'plates', 'namespace' => 'Plates'], function(){
            Route::get('/', 'PlatesController@index')->name('plates');
            Route::get('plate/{id?}', 'PlatesController@show')->name('plate');
        });

        Route::group(['prefix' => 'books', 'namespace' => 'Books'], function(){
            Route::get('/', 'BooksController@index')->name('books');
            Route::get('book/{id?}', 'BooksController@show')->name('book');
        });

        Route::group(['prefix' => 'antiques', 'namespace' => 'Antiques'], function(){
            Route::get('/', 'AntiquesController@index')->name('antiques');
            Route::get('antiques/{id?}', 'AntiquesController@show')->name('antique');
        });

        Route::group(['prefix' => 'comics', 'namespace' => 'Comics'], function(){
            Route::get('/', 'ComicsController@index')->name('comics');
            Route::get('comic/{id?}', 'ComicsController@show')->name('comic');
        });

        Route::group(['prefix' => 'records', 'namespace' => 'Records'], function(){
            Route::get('/', 'RecordsController@index')->name('records');
            Route::get('record/{id?}', 'RecordsController@show')->name('record');
        });

        Route::group(['prefix' => 'cards', 'namespace' => 'Cards'], function(){
            Route::get('/', 'CardsController@index')->name('cards');
            Route::get('card/{id?}', 'CardsController@show')->name('card');
        });

        Route::group(['prefix' => 'cds', 'namespace' => 'Cds'], function(){
            Route::get('/', 'CdsController@index')->name('cds');
            Route::get('cd/{id?}', 'CdsController@show')->name('cd');
        });

        Route::group(['prefix' => 'dvds', 'namespace' => 'Dvds'], function(){
            Route::get('/', 'DvdsController@index')->name('dvds');
            Route::get('dvds/{id?}', 'DvdsController@show')->name('dvd');
        });

        Route::group(['prefix' => 'memorabilia', 'namespace' => 'Memorabilia'], function(){
            Route::get('/', 'MemorabiliaController@index')->name('memorabilia');
            Route::get('memorabilia/{id?}', 'MemorabiliaController@show')->name('memento');
        });

        Route::group(['prefix' => 'others', 'namespace' => 'Other'], function(){
            Route::get('/', 'OtherController@index')->name('others');
            Route::get('other/{id?}', 'MemorabiliaController@show')->name('other');
        });

    });
});