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

Route::get('/', function () {
    return redirect('registration');
});

Route::get('test-email', function () {
    $user = \App\User::superAdmin();
    $user->notify(new \App\Notifications\TestEmail());
    dd("Test email sent");
});

Route::get('registration', 'RegistrationsController@create');
Route::post('registrations', 'RegistrationsController@store');

Route::get('admin/registrations', 'RegistrationsController@index');
Route::get('admin/registrations/fetch', 'RegistrationsController@fetch');
Route::get('admin/registrations/{registration}', 'RegistrationsController@show');

Auth::routes();
