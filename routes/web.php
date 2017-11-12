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


Route::get  ('/'                    , ['as' => 'home'            , 'uses' => 'FrontController@home'       ]);
Route::get  ('/gallery'             , ['as' => 'gallery'         , 'uses' => 'FrontController@gallery'    ]);
Route::get  ('/tattoo-care'         , ['as' => 'tattoo-care'     , 'uses' => 'FrontController@tattooCare' ]);

