<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
*
* RUTAS GENERICAS
*
*/
Route::auth();
Route::get('/admin', 'HomeController@index');
/*
*
* RUTAS GENERICAS
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS MOTTO
*
*/

/*
*
* FIN RUTAS MOTTO
*
*/

//////////////////////////////////////////////////////////////////////////////////

/*
*
* RUTAS RODRIGO
*
*/

/*
*
* FIN RUTAS RODRIGO
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS ELIAS
*
*/
Route::get('/calendar', function () {
    return view('citas/calendar');
})->name('calendar');


Route::resource('citas','CitaController');
/*
*
* FIN RUTAS ELIAS
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS LOBO
*
*/

/*
*
* FIN RUTAS LOBO
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS ALAM
*
*/

/*
*
* FIN RUTAS ALAM
*
*/

//////////////////////////////////////////////////////////////////////////////////
