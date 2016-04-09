<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['prefix' => 'admin', 'middleware' => 'web'], function() {
    /* Auth */
	Route::get('/login', 'Admin\AdminHomeController@showLoginForm');
	Route::post('/login', 'Auth\AuthController@login');
	Route::get('/logout', 'Auth\AuthController@logout');

    /* Settings */
    Route::get('/settings', 'Admin\Settings\SettingsController@index');
    Route::put('/settings', 'Admin\Settings\SettingsController@update');
    Route::get('/settings/edit', 'Admin\Settings\SettingsController@showEditForm');

    /* Accounts */
    Route::get('/accounts', 'Admin\Accounts\AccountsController@index');
    Route::get('/accounts/create', 'Admin\Accounts\AccountsController@showCreateForm');
    Route::post('/accounts', 'Admin\Accounts\AccountsController@store');
    Route::get('/accounts/{id}/delete', 'Admin\Accounts\AccountsController@deleteUser');
    Route::get('/accounts/{id}/edit', 'Admin\Accounts\AccountsController@showEditForm');
    Route::put('/accounts/{id}', 'Admin\Accounts\AccountsController@updateUser');

    /* Attendees */
    Route::get('', 'Admin\Attendees\AttendeesController@index');
    Route::get('/attendees', 'Admin\Attendees\AttendeesController@index');
    Route::get('/attendees/create', 'Admin\Attendees\AttendeesController@showCreateForm');
    Route::post('/attendees', 'Admin\Attendees\AttendeesController@store');
    Route::get('/attendees/{id}', 'Admin\Attendees\AttendeesController@show');
    Route::put('/attendees/{id}', 'Admin\Attendees\AttendeesController@update');
    Route::get('/attendees/{id}/edit', 'Admin\Attendees\AttendeesController@showEditForm');
    Route::get('/attendees/{id}/delete', 'Admin\Attendees\AttendeesController@deleteAttendee');
    Route::get('/attendees/{id}/daycare', 'Admin\Daycare\DaycareController@addChild');

    /* Daycare */
    Route::get('/daycare', 'Admin\Daycare\DaycareController@index');
    Route::get('/daycare/{id}', 'Admin\Daycare\DaycareController@show');
    Route::get('/daycare/{id}/edit', 'Admin\Daycare\DaycareController@showEditForm');
    Route::get('/daycare/{id}/delete', 'Admin\Daycare\DaycareController@deleteChild');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web', 'setlocale']], function () {
    /* Header routes */
    Route::get('/', 'HomeController@home');
    Route::get('/en', 'HomeController@setLocalEn');
    Route::get('/es', 'HomeController@setLocalEs');

    Route::get('/conferencistas', 'HomeController@conferencistasView');
    Route::get('/patrocinanos', 'HomeController@patrocinanosView');
    Route::get('/patrocinadores', 'HomeController@patrocinadoresView');
    Route::get('/involucrate', 'HomeController@involucrateView');
    Route::get('/noticias', 'HomeController@noticiasView');
    Route::get('/conocenos', 'HomeController@conocenosView');

    Route::get('/contacto', 'ContactoController@create');
    Route::post('/contacto', 'ContactoController@store');
    Route::get('/contacto/enviado', 'ContactoController@getSentView');    

    Route::get('/registro', 'RegistroController@create');
    Route::post('/registro', 'RegistroController@store');
    Route::get('/registro/aceptado', 'RegistroController@getAcceptedView');    
    Route::get('/registro/listaespera', 'RegistroController@getWaitingListView');    

    /* Footer routes */
    Route::get('/historia', 'HomeController@historiaView');
    Route::get('/testimonios', 'HomeController@testimoniosView');
    Route::get('/grupos', 'HomeController@gruposView');
    Route::get('/galeria/2014', 'HomeController@galeria2014View');
    Route::get('/galeria/2015', 'HomeController@galeria2015View');
    Route::get('/conferencias/2014', 'HomeController@conferencias2014View');
    Route::get('/conferencias/2015', 'HomeController@conferencias2015View');
});




