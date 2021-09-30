<?php

use Illuminate\Support\Facades\Route;

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
/*
 *
 */

/*Route::get('/', function () {
    return view('layouts.index_font');
});*/
Route::get('/vos-besoins', [App\Http\Controllers\BesoinsController::class, 'index'])->name('besoins');
Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/admin_regulateurs',\App\Http\Controllers\AdminRegulateurController::class);
    Route::resource('/admin-assurances',\App\Http\Controllers\AdminEntrepriseAssuranceController::class);
    Route::resource('entreprise-regulateurs',\App\Http\Controllers\RegulateurEntrepriseController::class);
    Route::resource('entreprise-assurances',\App\Http\Controllers\EntrepriseAssuranceController::class);
    Route::get('/entreprise-assurances/{id}/show', [\App\Http\Controllers\EntrepriseAssuranceController::class,'showEntreprise'])->name('entreprise-assurances.show');
    Route::resource('agents-regulateurs',\App\Http\Controllers\AgentRegulateurController::class);
    Route::resource('agents-commercials',\App\Http\Controllers\AgentCommercialController::class);
    Route::resource('clients',\App\Http\Controllers\ClientController::class);
    Route::get('/clients-all',[\App\Http\Controllers\ClientController::class,'alls'])->name('clients.all');
    Route::get('/devis-all',[\App\Http\Controllers\DevisController::class,'alls'])->name('devis.all');
    Route::resource('/abonnements',\App\Http\Controllers\AbonnementController::class);
    Route::resource('/devis',\App\Http\Controllers\DevisController::class);


});




/*Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'Dashboard\HomeController')->name('dashboard.home');

    Route::get('/phones', 'Dashboard\PhoneController@index')->name('dashboard.phone.index');
    Route::get('/phones/create', 'Dashboard\PhoneController@create')->name('dashboard.phone.create');
    Route::post('/phones/create', 'Dashboard\PhoneController@store');

    //Route::get('/phones/{id}/show', 'Dashboard\PhoneController@show')->name('dashboard.phone.show');
    Route::get('/phones/edit/{id}', 'Dashboard\PhoneController@edit')->name('dashboard.phone.edit');
    Route::put('/phones/{phone}/update', 'Dashboard\PhoneController@update')->name('dashboard.phone.update');
    Route::get('/phones/{phone}/destroy', 'Dashboard\PhoneController@destroy')->name('dashboard.phone.destroy');


    Route::get('/profile/edit/{id}', 'Dashboard\ProfileController@edit')->name('dashboard.profile.edit');
    Route::put('/profile/update', 'Dashboard\ProfileController@update')->name('dashboard.profile.update');
});*/

