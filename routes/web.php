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
    return view('welcome');
})->name('welcome');

Route::resource('/application', 'ApplicationController');
Route::get('/application/getMuni/{id}', 'ApplicationController@getMuni');
Route::get('/application/getCity/{id}', 'ApplicationController@getCity');

Route::resource('/powr_regreq', 'POWRregReqController');
Route::get('/powr_regreq/getMuni/{id}', 'POWRregReqController@getMuni');
Route::get('/powr_regreq/getCity/{id}', 'POWRregReqController@getCity');
Route::get('/powr_regreq/getCityDistrict/{id}', 'POWRregReqController@getCityDistrict');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:edit-users')->group(function(){
  Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);

});

Route::namespace('Nom')->prefix('admin')->name('nom.')->group(function(){
  Route::resource('/nom/countries', 'CountriesController');
  Route::resource('/nom/regions', 'RegionsController');
  Route::resource('/nom/muni', 'MuniController');
  Route::resource('/nom/genders', 'GendersController');
  Route::resource('/nom/languages', 'LanguagesController');
  Route::resource('/nom/currency', 'CurrencyController');
  Route::resource('/nom/carcategory', 'CarcategoryController');
  Route::resource('/nom/prefcontrtypes', 'PrefcontrtypeController');
  Route::resource('/nom/computerskills', 'ComputerskillsController');
  Route::resource('/nom/educationlevels', 'EducationlevelController');
  Route::resource('/nom/professions', 'ProfessionController');
  Route::resource('/nom/professionclass', 'ProfessionclassController');
  Route::resource('/nom/specialities', 'SpecialityController');
  Route::resource('/nom/workregimes', 'WorkregimeController');
  Route::resource('/nom/sadirectorates', 'SADirectorateController');
});

Route::resource('admin/nom/regions', 'Nom\RegionController');

Route::namespace('Expert')->prefix('expert')->name('expert.')->middleware('can:expert-user')->group(function(){
  Route::resource('/requests/registration', 'RegistrationRequestController');
  Route::resource('/requests/changes', 'ChangeRequestController');
  Route::resource('/requests/notes', 'NotificationRequestController');

  Route::resource('/approved', 'ApprovedRequestController');

  Route::resource('/notifications', 'ApprovedNotificationsController');

  Route::resource('/refusals/reg', 'RefuseRegistrationController');
  Route::resource('/refusals/not', 'RefuseNotificationController');
  Route::resource('/refusals/chg', 'RefuseChangeController');

  Route::resource('/reports', 'ReportsController');

  Route::resource('/jobs/seeking', 'JobSeekingController');
  Route::resource('/jobs/found', 'FoundController');
});

Route::namespace('RA')->prefix('ra')->name('ra.')->group(function(){
  Route::resource('/start', 'StartPageController', ['except' => ['show','create','store','edit','update','destroy']]);
  Route::resource('/agent', 'AgentPageController', ['except' => ['show','create','store','edit','update','destroy']]);
  Route::resource('/jobs', 'JobsPageController', ['except' => ['show','edit','update','destroy']]);
  Route::resource('/help', 'HelpPageController', ['except' => ['show','create','store','edit','update','destroy']]);
});

Route::namespace('POWR')->prefix('powr')->name('powr.')->group(function(){
  Route::resource('/home', 'PowrHomeController', ['except' => ['show','create','store','edit','update','destroy']]);
  Route::resource('/profile', 'PowrHomeController', ['except' => ['show','create','store','edit','update','destroy']]);
  Route::resource('/eservices', 'PowrHomeController', ['except' => ['show','create','store','edit','update','destroy']]);
  Route::resource('/srm', 'PowrSRMController', ['except' => ['show','create','store','edit','update','destroy']]);
  Route::resource('/help', 'PowrHelpController', ['except' => ['show','create','store','edit','update','destroy']]);
});




