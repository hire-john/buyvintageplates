<?php

/* Authenticated Backend Portal Routes */
Route::group(['middleware' => ['web', 'verified', 'auth', 'throttle:60,1']], function () {
    Route::group(['prefix' => 'portal', 'namespace' => 'App\Http\Controllers\Portal'], function(){

        Route::redirect('/', '/portal/dashboard');

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('accounting', 'AccountingController@index')->name('accounting');
        Route::get('tracking', 'TrackingController@index')->name('tracking');
        
        Route::get('profile', 'ProfileController@index')->name('profile');

        Route::get('results', 'SearchEngineController@search')->name('portal-results');

        Route::group(['prefix' => 'inventory', 'namespace' => 'Categories'], function(){
            Route::get('/', 'CategoriesController@index')->name('inventory');
            Route::group(['prefix' => 'category'], function() {
                Route::get('/', 'CategoriesController@index');

                Route::group(['prefix' => 'plates', 'namespace' => 'Plates'], function() {
                    Route::get('/', 'PlatesController@index')->name('plates-inventory');
                    Route::get('create/{id?}', 'PlatesController@create')->name('plates-create');
                });

                Route::group(['prefix' => 'antiques'], function() {});
                Route::group(['prefix' => 'books'], function() {});
                Route::group(['prefix' => 'comics'], function() {});
                Route::group(['prefix' => 'cards'], function() {});
                Route::group(['prefix' => 'cds'], function() {});
                Route::group(['prefix' => 'dvds'], function() {});
                Route::group(['prefix' => 'others'], function() {});
                Route::group(['prefix' => 'records'], function() {});
                Route::group(['prefix' => 'memorabilia'], function() {});

            });
        });

        Route::group(['prefix' => 'tools'], function(){
            Route::get('calendar', function () {
                return view('content.private.pages.tools.calendar');
            })->name('calendar');
        });

        Route::group(['prefix' => 'reporting', 'namespace' => 'Reporting'], function(){
            Route::get('reports', 'ReportingController@index')->name('reporting');
           
            Route::group(['prefix' => 'products', 'namespace' => 'Products'], function(){
                Route::get('plates', 'PlateReportsController@index')->name('plate-reports');
            });
        });

        Route::group(['prefix' => 'referencing', 'namespace' => 'Referencing'], function(){
            Route::get('/', 'ReferencesController@index')->name('product-references');
            Route::group(['prefix' => 'plates', 'namespace' => 'Plates'], function() {
                Route::get('/', 'PlateReferencesController@index')->name('plate-references');
                Route::get('create', 'PlateReferencesController@create')->name('plate-references-create');
            });
            Route::group(['prefix' => 'books', 'namespace' => 'Books'], function() {
                Route::get('/', 'BookReferencesController@index')->name('book-references');
                Route::get('create', 'BookReferencesController@create')->name('books-references-create');

                Route::group(['prefix' => 'google', 'namespace' => 'Google'], function() {
                    Route::get('id/{id?}', 'GoogleBooksApiController@getSelfLinkObject');
                    Route::get('isbn/{isbn?}', 'GoogleBooksApiController@getIsbnObject');
                    Route::get('/', 'GoogleReferencesController@index')->name('book-references-google');
                    Route::get('search-results', 'GoogleReferencesController@search')->name('book-references-google-results');;

                });

            });
        });
    });
});